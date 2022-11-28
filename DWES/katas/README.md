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

## Coverage
Para activar el coverage hemos tocado el dockerfile y a la hora de lanzar tendríamos que añadir en el `php.ini` tendriamos que añadir `xdebug.mode=coverage` lo trampeamos así
```shell
XDEBUG_MODE=coverage ./vendor/bin/phpunit --coverage-html micoverage
```
