# Docker

```shell
docker-compose up -d
```
Con el comando anterior levantamos los 3 servicios, pudiendo acceder a los contenedores:

```shell
docker ps
docker exec -it tema01_db_1      bash
docker exec -it tema01_web_1     bash
docker exec -it tema01_adminer_1 /bin/sh
```

Usamos devcontainer
https://github.com/microsoft/vscode-dev-containers/tree/v0.134.0/containers/php

Abriremos visual studio usando dev-container y abriremos una terminal dentro del docker para instalar la librería de testing:
```shell
docker ps
docker exec -it hardcore_roentgen bash
cd ejemplo
composer require phpunit/phpunit --dev
./vendor/bin/phpunit tests/
```