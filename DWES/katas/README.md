# PHP


En la terminal del devcontainer
```shell
composer require phpunit/phpunit --dev
./vendor/bin/phpunit tests/
```

Generaremos una conf para phpunit

```shell
/vendor/bin/phpunit --generate-configuration
```
Con el fichero `phpunit.xml.dist` ya podemos hacer solo `/vendor/bin/phpunit`