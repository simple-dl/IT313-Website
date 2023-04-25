from flask import Flask, request, jsonify
import mysql.connector
import requests
import socket

app = Flask(__name__)

db = mysql.connector.connect(
        host="localhost",
        user="frontend",
        password="Frontend1$",
        database="plants"
        )

api_endpoint = "http://166.159.66.153:5000"
api_endpoint2 = "http://166.159.66.153:5001"

@app.route('/api', methods=['POST'])
def send_data():

    print('Received POST request')

    data = request.get_json()
    preset_id = data.get('preset_id')
    cursor = db.cursor()
    cursor.execute("SELECT length_planted, water_perday, light_perday, cover_perday FROM presets WHERE preset_id = %s", (preset_id,))
    result = cursor.fetchone()
    cursor.close()

    data_dict = {'length_planted': result[0], 'water_perday': result[1], 'light_perday': result[2], 'cover_perday': result[3]}

    response2 = requests.post(api_endpoint2, json=data_dict)
    response = requests.post(api_endpoint, json=data_dict)
    print(str(response) + " from Servo pi")
    print(str(response2) + " from Water pi")
    if response.ok and response2.ok:
        print("Data sent to both API's successfully")
        message = "Success"
    else:
        print("Failed to send data")
        message = "Initialization failed"

    return jsonify({'message': message})
