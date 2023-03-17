from flask import Flask, render_template, request
import subprocess

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        ip = request.form['ip']
        port = request.form['port']
        duration = request.form['duration']

        # Ping the IP for the specified duration using subprocess
        output = subprocess.run(['ping', '-c', str(duration), '-p', str(port), ip], capture_output=True, text=True)

        return render_template('index.html', output=output.stdout)

    return render_template('index.html')

if __name__ == '__main__':
    app.run()
