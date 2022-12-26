## API REST en Spring Boot dockerizada

Ejemplo de dockerización de una aplicación Spring Boot.

El proceso completo se explica en este vídeo: https://www.youtube.com/watch?v=uqProiZ_wtU

# How to use

```
mvn clean install
```

```
docker build -t holajavadocker:001 -f Dockerfile .
```

```
docker run -p 8080:8080 -it holajavadocker:001 /bin/bash
```

con hhtpie instalado
```
http get 127.0.0.1:8080/hola
```
Sino hacemos un curl
```
curl 127.0.0.1:8080/hola
```

## Ejecutar
Para ejecutar usando devcontainer cuando estemos dentro podemos hacer
´´´
mvn spring-boot:run
´´´
y con esto ya tenemos el jar corriendo.

```
http get 127.0.0.1:8080/hola
```
Sino hacemos un curl
```
curl 127.0.0.1:8080/hola
```

## WAR
Para generar el war con los cambios que hemos realizado
```
mvn install
```
