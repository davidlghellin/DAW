# Docker
Para generar el docker de un script de php https://academy.leewayweb.com/como-usar-docker-en-proyectos-php/


```
docker build -t my-php-app -f Dockerfile-script . 
docker run -it --rm --name my-running-app my-php-app
```

```
docker build -t my-php-web-app .
docker run -p 80:80 --rm -it --name my-web-app my-php-web-app
```

Levantando el docker-compose tenemos la aplicación
