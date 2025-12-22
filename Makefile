# Makefile для проекта Laravel Docker

# Переменные
ifneq (,$(shell command -v docker-compose 2> /dev/null))
	DOCKER_COMPOSE := docker-compose
else
	DOCKER_COMPOSE := docker compose
endif

# Команды
.PHONY: up down build shell install migrate help

help:
	@echo "Commands:"
	@echo "  make up       - Run containers"
	@echo "  make down     - Stop and delete containers"
	@echo "  make build    - Build containers"
	@echo "  make shell    - Enter console containers"
	@echo "  make install  - Run bash-script first settings (start.sh)"
	@echo "  make migrate  - Run migrate db"
	@echo "  make test     - Run tests"

up:
	$(DOCKER_COMPOSE) up -d

down:
	$(DOCKER_COMPOSE) down

build:
	$(DOCKER_COMPOSE) build

shell:
	$(DOCKER_COMPOSE) exec app bash

install:
	./start.sh

migrate:
	$(DOCKER_COMPOSE) exec app php artisan migrate

test:
	$(DOCKER_COMPOSE) exec app php artisan test
