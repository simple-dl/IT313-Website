@app.route('/data', methods=['POST'])
def get_data():

    data = request.get_json()

    temperature = data['temperature']
    humidity = data['humidity']

    cursor = db.cursor()

    sql = "UPDATE shelf_reading SET humidity_percentage = %s, temperature_C = %s WHERE username = 'test1'"
    val = (humidity, temperature)
    cursor.execute(sql, val)

    db.commit()
    cursor.close()

    print('Received POST request for data')

    print(temperature)
    print(humidity)

    return jsonify({'message': 'Data received successfully'})
