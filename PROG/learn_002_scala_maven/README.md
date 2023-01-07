# Scala-Maven

Para generar el proyecto con maven y scala podemos lanzar
```sh
mvn archetype:generate -DarchetypeGroupId=net.alchim31.maven -DarchetypeArtifactId=scala-archetype-simple
```
Tenemos que instalar el mvn
```sh
sdk install maven
```

## SonarQube
Luego para configuraremos el token de sonar y podremos lanzar
```sh
mvn sonar:sonar
```

