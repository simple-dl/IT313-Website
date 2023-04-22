from flask import Flask, request
import subprocess

app = Flask(__name__)

@app.route('/', methods=['POST'])
def receive_data():
    data = request.json
    length_planted = data['length_planted']
    water_perday = data['water_planted']
    light_perday = data['light_planted']
    cover_perday = data['cover_planted']
    cmd = ['python', '/home/pi/script.py', str(length_planted), str(water_perday, str(light_perday), str(cover_perday))]
    output = subprocess.check_output(cmd)
    print(output)
    return output

if __name__ == '__main__':
    app.run(host = '0.0.0.0', port=8001, debug=True)
