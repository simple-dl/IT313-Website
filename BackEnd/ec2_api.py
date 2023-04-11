from flask import Flask, request, jsonify
import mysql.connector
import requests

app = Flask(__name__)

db = mysql.connector.connect(
        host="localhost",
        user="frontend",
        password="Frontend1$",
        database="plants"
        )

api_endpoint = "http://localhost:2222"


@app.route('/api', methods=['POST'])
def get_data():

    print('Received POST request')

    data = request.get_json()
    preset_id = data.get('preset_id', 4)
    cursor = db.cursor()
    cursor.execute("SELECT length_planted, water_perday, light_perday, cover_perday FROM presets WHERE preset_id = %s", (preset_id,))
    result = cursor.fetchone()
    cursor.close()

    data_dict = {'length_planted': result[0], 'water_perday': result[1], 'light_perday': result[2], 'cover_perday': result[3]}

    response = requests.post(api_endpoint, json=data_dict)
    print(response)
    if response.ok:
        print("Data sent to API successfully")
        return jsonify({"message": "Success"})
    else:
        print("Failed to send data to API")
        return jsonify({"message": "Failed"})

if __name__ == '__main__':
    app.run(debug=True)
