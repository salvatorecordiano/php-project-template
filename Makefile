default: build

h help:
	@grep '^[a-z]' Makefile

.PHONY: start php-bash

s start:
	docker-compose up -d --force-recreate --remove-orphans

pb php-bash:
	docker exec -ti php bash

t test:
	docker exec -ti php ./vendor/bin/phpunit
