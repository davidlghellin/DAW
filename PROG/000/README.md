# JAVA

Crearemos un contenedor para usarlo con devcontainer

```shell
mvn archetype:generate -DgroupId=es.david.app -DartifactId=my-app -DarchetypeArtifactId=maven-archetype-quickstart -DarchetypeVersion=1.4 -DinteractiveMode=false

mvn clean install
# lo instalamos en el .m2 del contenedor

# Para ejecutarlo entramos a la carpeta del proyecto y ejecutamos maven 
cd my-app
mvn compile exec:java -Dexec.mainClass=es.david.app.App
```

## Test
Se han añadido unos ejemplos básicos de test usando junit, para correrlos podemos desde el visual studio para depurar, o desde consola
```sh
mvn test
```
