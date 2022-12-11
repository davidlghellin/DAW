"""Entrada y main de flask"""
from flask import Flask, render_template

app = Flask(__name__)


@app.route('/')
def index() -> str:
    """Devolvemos un template con parámetros"""
    # return 'Hola Mundo'
    data = {
        'nombre': 'david',
        'apellido': 'lópez'
    }
    return render_template('index.html', data=data)


def suma(num_a, num_b):
    """Suma para check test"""
    return num_a + num_b


if __name__ == '__main__':
    app.run(debug=True, port=5000)
