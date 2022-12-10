from flask import Flask, render_template

app = Flask(__name__)


@app.route('/')
def index():
    # return 'Hola Mundo'
    data = {
        'nombre': 'david',
        'apellido': 'lópez'
    }
    return render_template('index.html', data=data)


if __name__ == '__main__':
    app.run(debug=True, port=5000)
