# Scala

Para poder usar el devcontainer necesitamos el plugin asociado y tiene que tener esta estructura para que funcione metals correctamente (al menos ahora, no he investigado mucho)

```
sdk install sbt
```

https://http4s.org/v0.23/docs/quickstart.html

Para crear el docker, usando el devcontainer no lo podemos hacer no tenemos el docker en ese devcontainer
```
sbt docker:publishLocal
```
