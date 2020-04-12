include .env

default: up
## up	:	Start up containers.
.PHONY: up
up:
	@echo "Starting up containers for $(PROJECT_NAME)..."
	docker-compose pull
	docker-compose up -d --remove-orphans

## down	:	Stop containers.
.PHONY: down
down: stop

## start	:	Start containers without updating.
.PHONY: start
start:
	@echo "Starting containers for $(PROJECT_NAME) from where you left off..."
	@docker-compose start

## stop	:	Stop containers.
.PHONY: stop
stop:
	@echo "Stopping containers for $(PROJECT_NAME)..."
	@docker-compose stop

## prune	:	Remove containers and their volumes.
##		You can optionally pass an argument with the service name to prune single container
##		prune db	: Prune `db` container and remove its volumes.
##		prune db app	: Prune `db` and `app` containers and remove their volumes.
.PHONY: prune
prune:
	@echo "Removing containers for $(PROJECT_NAME)..."
	@docker-compose down -v $(filter-out $@,$(MAKECMDGOALS))

## ps	:	List running containers.
.PHONY: ps
ps:
	@docker ps --filter name='$(PROJECT_NAME)*'
## shell	:	Access `app` container via shell.
.PHONY: shell
shell:
	docker exec -ti -u application -e COLUMNS=$(shell tput cols) -e LINES=$(shell tput lines) $(shell docker ps --filter name='$(PROJECT_NAME)_php' --format "{{ .ID }}") bash

## backup	:	backup db
##		For example: make backup
.PHONY: backup
backup:
	mkdir -p ./backups
	docker exec -it $(shell docker ps --filter name='^/${PROJECT_NAME}_db' --format "{{ .ID }}") mkdir -p /tmp/backups
	docker exec $(shell docker ps --filter name='^/${PROJECT_NAME}_db' --format "{{ .ID }}") /bin/bash -c "/usr/bin/mysqldump -u root --password=${DB_ROOT_PASSWORD} ${DB_NAME} > /tmp/backups/${DB_NAME}.sql"
	docker cp $(shell docker ps --filter name='^/${PROJECT_NAME}_db' --format "{{ .ID }}"):/tmp/backups/${DB_NAME}.sql ../dumps/${DB_NAME}-$(shell date +'%Y%m%d%H%M').sql

## Restore
## restore db
## Use like this
## make restore file="../dumps/full.sql"
.PHONY: restore
restore:
	docker exec -it $(shell docker ps --filter name='^/${PROJECT_NAME}_db' --format "{{ .ID }}") mkdir -p /tmp/backups
	docker cp $(file) $(shell docker ps --filter name='^/${PROJECT_NAME}_db' --format "{{ .ID }}"):/tmp/backups/${DB_NAME}.sql
	docker exec -it $(shell docker ps --filter name='^/${PROJECT_NAME}_db' --format "{{ .ID }}") mysql -u ${DB_USER} -p${DB_PASSWORD} ${DB_NAME} -e "DROP SCHEMA ${DB_NAME}; CREATE SCHEMA ${DB_NAME}; USE ${DB_NAME}; SOURCE /tmp/backups/${DB_NAME}.sql;"

## logs	:	View containers logs.
##		You can optinally pass an argument with the service name to limit logs
##		logs app	: View `app` container logs.
##		logs db app	: View `db` and `app` containers logs.
.PHONY: logs
logs:
	@docker-compose logs -f $(filter-out $@,$(MAKECMDGOALS))

# https://stackoverflow.com/a/6273809/1826109
%:
	@: