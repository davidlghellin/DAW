# Express

```sh
npm init -y 
npm i express
```

Para lanzar el servidor
```sh
node index.js
```

Podemos entrar en el navegador, usar httpie o hacer un curl
```
http get 127.0.0.1:3000                                             
curl -i 127.0.0.1:3000        
```

Para no tener que estar cancelar y volviendo a lanzar
```sh
npm i nodemon -D
npx nodemon index.js
```

Instalamos el middleware morgan
```
npm i morgan
```

Motor de plantillas
```
npm install ejs
```