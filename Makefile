  
ENV ?= "dev"
ENVFILE = .env.$(ENV)
FRONT_FOLDER = ./front
BACK_FOLDER = ./back

install: copy-env install-front install-front build-doc-open-api

copy-env:
	cp $(ENVFILE) $(BACK_FOLDER)/.env && cp $(ENVFILE) $(FRONT_FOLDER)/.env && cp $(ENVFILE) ./.env

install-front:
	cd front && yarn install

install-front:
	cd back && composer install

server-dev: server-front server-back

server-back:
	cd back/public && php -S localhost:8000

server-front:
	cd front && yarn start

build-doc-open-api:
	cd back && php bin/console api:openapi:export --output=../swagger_docs.json