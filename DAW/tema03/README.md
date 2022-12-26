# Tomcat WAR
## DEV
Para desarrollar el código y la preparación del war entrar al proyecto `docker-springboot` 

## RUN
Generamos el war
```
mvn install
```

Copiamos el war
```
cp /home/wizord/.m2/repository/com/scv/ejemplos/dockerbasico/0.0.1-SNAPSHOT/dockerbasico-0.0.1-SNAPSHOT.war dockerbasico.war
```

Generar la imágen y levantar el docker.
```
docker build -t mywebwar .

docker run -p 8080:8080  mywebwar
```
Comprobar que funciona
```
curl http://localhost:8080/dockerbasico/hola
```

## JSP
Ahora lo que vamos a hacer es añadir un simple fichero `jsp`, con ello ahora tendremos dos aplicaciones corriendo

```
docker build -t mywebwar .

docker run -p 8080:8080  mywebwar
```
Podemos comprobar
```
curl http://localhost:8080/dockerbasico/hola

curl http://localhost:8080/Aplic_Web/index.jsp
```
