#!/bin/bash
set -e

# Удаляем origin только если это Git-репозиторий
if [ -d .git ]; then
    if git remote | grep -q "^origin$"; then
        echo "🗑️ Removing existing Git remote 'origin'..."
        git remote remove origin
    fi
fi

echo "🚀 Starting Laravel Docker project..."

# Determine if we should use 'docker-compose' or 'docker compose'
if command -v docker-compose &> /dev/null; then
    DOCKER_COMPOSE="docker-compose"
else
    DOCKER_COMPOSE="docker compose"
fi

# Переименовываем README.md в резервную копию
if [ -f README.md ]; then
    mv README.md README.md
    echo "📄 Renamed README.md → README.md.bak"
fi

# 1. Создаём .env из примера, если его нет
if [ ! -f .env ]; then
    cp .env.example .env
    echo "✅ Created .env from .env.example"
fi

# 2. Запускаем контейнеры в фоне
$DOCKER_COMPOSE up -d

# 3. Ждём готовности MySQL (максимум 30 секунд)
echo "⏳ Waiting for MySQL to be ready..."

# Load .env variables if available
if [ -f .env ]; then
    export $(grep -v '^#' .env | xargs)
fi

DB_USERNAME=${DB_USERNAME:-laravel}
DB_PASSWORD=${DB_PASSWORD:-password}

timeout=30
counter=0
until $DOCKER_COMPOSE exec -T db mysql -u "$DB_USERNAME" -p"$DB_PASSWORD" -e "SELECT 1;" > /dev/null 2>&1; do
    counter=$((counter+1))
    if [ $counter -ge $timeout ]; then
        echo "❌ MySQL did not start in time"
        exit 1
    fi
    sleep 1
done
echo "✅ MySQL is ready"

# 4. Устанавливаем зависимости (если vendor/ отсутствует)
if [ ! -d "vendor" ]; then
    echo "📦 Installing Composer dependencies..."
    $DOCKER_COMPOSE exec -T app composer install --no-interaction --prefer-dist --optimize-autoloader
fi

# 5. Генерируем APP_KEY (если он пустой или отсутствует)
if grep -q "APP_KEY=" .env && [ -z "$(grep "APP_KEY=" .env | cut -d '=' -f2)" ]; then
    echo "🔑 Generating APP_KEY..."
    $DOCKER_COMPOSE exec -T app php artisan key:generate --ansi
elif ! grep -q "APP_KEY=" .env; then
    echo "🔑 APP_KEY not found in .env — generating..."
    $DOCKER_COMPOSE exec -T app php artisan key:generate --ansi
else
    echo "✅ APP_KEY already set"
fi

# 6. Запускаем миграции и сиды
echo "🗄️ Running migrations..."
$DOCKER_COMPOSE exec -T app php artisan migrate --force

echo "🌱 Running seeders..."
$DOCKER_COMPOSE exec -T app php artisan db:seed --force

# 7. Создаем симлинк на storage
echo "🔗 Linking storage..."
$DOCKER_COMPOSE exec -T app php artisan storage:link

# 8. Настраиваем права (на всякий случай)
echo "🔒 Setting permissions..."
$DOCKER_COMPOSE exec -T app chmod -R 777 storage bootstrap/cache

echo "✅ Laravel is ready! Visit http://localhost"
