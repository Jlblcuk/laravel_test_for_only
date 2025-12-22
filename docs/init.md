# Установка и запуск проекта

```bash
git clone https://github.com/Jlblcuk/laravel_test_for_only.git
```
```bash
cd laravel_test_for_only
```
```bash
make install
```
или
```bash
./start.sh
```
---
Скрипт start.sh:
1. Удалит ссылку на удалённый репозиторий
2. Переименует README.md в README.md.bak
3. Создаст .env файл из .env.example
4. Запустит контейнеры Docker
5. По готовности MySQL запустит установку зависимостей
6. Сгенерирует APP_KEY
7. Запустит миграции и сиды
8. По готовности приложения выведет сообщение: "Laravel is ready! Visit http://localhost"
