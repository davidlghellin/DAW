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
