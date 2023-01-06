# Docker

Vamos a usar los docker compose que tenemos para levantar los servicios

En el docker-compose tenemos los servicios trucados para que use nuestro Dockerfile donde activaremos los módulos que necesitamos de PHP, por otro lado tenemos trucado los usuarios y tablas que queremos usar en el init.sql

```shell
docker-compose up -d --build
```

Podemos usar un cliente para mysql (https://www.mycli.net/)
```
sudo apt-get install mycli
mycli -u gestor -h localhost -P 3307 -D proyecto -p secreto
mycli mysql://gestor@localhost:3307/proyecto -p secreto
> source ./init/creates.sql;
```


Limpiar todo
```shell
docker system prune -a
```

## Página de inicio
http://localhost:8888/login.php

http://localhost:8888/cesta/login.php

## SonarQube

Hemos añadido para poder tener el sonarqube funcionando

```sh
docker-compose -f docker-compose-sonarqube.yml up -d --build 
```

Deberemos entrar con user y pass `admin` para generar un proyecto manual para así poder obtener el token
```sh
cd web
/opt/sonar-scanner/bin/sonar-scanner \
  -Dsonar.projectKey=tema04_2 \
  -Dsonar.sources=. \
  -Dsonar.host.url=http://sonarqube:9000 \
  -Dsonar.login=XXXXXXXXXX__TOKEN__XXXXXXXXXX
```
