  
ENV ?= "dev"
ENVFILE = .env.$(ENV)
FRONT_FOLDER = ./front
BACK_FOLDER = ./back

install: copy-env front-install back-install build-doc-open-api

copy-env:
	cp $(ENVFILE) $(BACK_FOLDER)/.env && cp $(ENVFILE) $(FRONT_FOLDER)/.env && cp $(ENVFILE) ./.env

front-install:
	cd front && yarn install

back-install:
	cd back && composer install

dev-server: front-server back-server

back-server:
	cd back/public && php -S localhost:8000

front-server:
	cd front && yarn start

build-doc-open-api:
	cd back && php bin/console api:openapi:export --output=../swagger_docs.json