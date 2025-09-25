from flask import Flask
from flask import render_template, redirect, request
from flask import flash
import json

app = Flask(__name__)

app.config['SECRET_KEY'] = 'LOGINSECRET'

@app.route('/')
def home():
    return render_template("index.html")
@app.route("/index", methods=['POST'])
def login():
    nome = request.form.get('nome')
    senha = request.form.get('senha')

    with open('users.json') as tempuser:
        users = json.load(tempuser)

        for user in users:
            if user['nome'] == nome and user['senha'] == senha:
                return render_template('users.html')

    flash('Usuário inválido')
    return redirect('/')

if __name__ == "__main__":
    app.run(debug=True)