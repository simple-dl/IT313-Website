import Adafruit_DHT
import RPi.GPIO as GPIO
import time 
import requests 

# Setting up pin for humidity and temperature sensor
DHT_SENSOR = Adafruit_DHT.DHT11
DHT_PIN = 4 

#Setting up the GPIO
water_channel = 16
light_channel = 26
GPIO.setmode(water_channel, GPIO.IN)
GPIO.setmode(light_channel, GPIO.IN)

while True:
  time.sleep(3)
  
  humidity, temperature = Adafruit_DHT.read(DHT_SENSOR, DHT_PIN)
  
  #Reading data from the water sensor
  if GPIO.input(water_channel) == GPIO.HIGH:
      water_status = 0
  else:
      water_status = 1
      
   #Reading data from the light sensor  
   if GPIO.input(light_channel) == GPIO.HIGH:
      light_status = 0
      lid_status = 0
  else:
      light_status = 1
      lid_status = 1
      
  #Reading data from the Humidity and Temperature Sensor
  if humidity is not None and temperature is not None:
    
    data = {
            'temperature': temperature,
            'humidity': humidity,
            'water_status': water_status,
            'light_status': light_status,
            'lid_status': lid_status
            }
    response = requests.post('http://52.7.96.114:5000/data', json=data)
    
    print("Temp={0:0.1f}C Humidity={1:0.1f}% Water Status={2} Light Status={3} Lid Status={4}".format(temperature, humidity, water_status, light_status, lid_status))

  else:
    
    print("Sensor failure. Check wiring.");
    time.sleep(3);

#Source of the code: https://www.thegeekpub.com/236868/using-the-dht13-temperature-sensor-with-the-raspberry-pi/
      
     
