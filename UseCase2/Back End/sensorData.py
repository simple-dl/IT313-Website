import Adafruit_DHT
import RPi.GPIO as GPIO
import time 
import requests 

DHT_SENSOR = Adafruit_DHT.DHT11
DHT_PIN = 4 

while True:
  time.sleep(3)
  
  humidity, temperature = Adafruit_DHT.read(DHT_SENSOR, DHT_PIN)
  
  if humidity is not None and temperature is not None:
    
    data = {'temperature': temperature, 'humidity': humidity}
    
    response = requests.post('http://52.7.96.114:5000/data', json=data)
    
    print("Temp={0:0.1f}C Humidity={1:0.1f}%".format(temperature, humidity))
  
  else:
    print("Sensor failure. Check wiring.");
    time.sleep(3);
    
#Source of the code: https://www.
      
     
