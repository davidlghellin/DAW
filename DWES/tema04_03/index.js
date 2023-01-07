const express = require('express');

const app = express();

app.use(express.json());

app.get('/', (req, res) => {
    res.send('Hola mundo\n');
});

app.get('/about', (req, res) => {
    res.send('About me\n');
});

app.get('/contact', (req, res, next) => {
    res.send('Form contact\n');
    next();
});

// Métodos
// https://developer.mozilla.org/es/docs/Web/HTTP/Methods
// https://expressjs.com/en/starter/basic-routing.html
// https://expressjs.com/en/guide/routing.html
// https://expressjs.com/en/4x/api.html#app.all

// para todas las rutas especificas haz algo
app.all('/user', (req, res) => {
    console.log('Por aqui hemos pasado');
});

app.get('/user', (req, res) => {
    res.json({
        username: "david",
        lastname: "lopez"
    });
});
// http get 127.0.0.1:3000/user

app.post('/post', (req, res) => {
    res.send('Form post\n');
});
// http post 127.0.0.1:3000/post


app.post('/user', (req, res) => {
    console.log(req.body);
    res.send(req.body);
});
// http POST localhost:3000/user name="John Smith" lastname="lopez"
// curl -X POST 127.0.0.1:3000/user -H 'Content-Type: application/json' -d '{"username": "David", "lastname": "lopez"}'

app.post('/user2/:id', (req, res) => {
    console.log(req.body);
    console.log(req.params);
    res.send('Form post\n');
});


app.put('/put', (req, res) => {
    res.send('Form put\n');
});
// http put 127.0.0.1:3000/put

app.put('/put2/:id', (req, res) => {
    console.log(req.body);
    console.log(req.params);
    res.send(`User ${req.params.id} update`);
});
// http put 127.0.0.1:3000/put2/22 name="John Smith" lastname="lopez"

app.delete('/delete', (req, res) => {
    res.send('Form delete\n');
});
// http delete 127.0.0.1:3000/delete

app.delete('/delete2/:userId', (req, res) => {
    res.send(`User ${req.params.userId} deleted\n`);
});
// http delete 127.0.0.1:3000/delete2/21

app.listen(3000, () => {
    console.log('Servidor en puerto 3000')
});

