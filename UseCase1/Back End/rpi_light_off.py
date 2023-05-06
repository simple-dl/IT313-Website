import RPi.GPIO as GPIO
import time

# set up GPIO pins for relay module
RELAY_PIN_1 = 26

GPIO.setmode(GPIO.BCM)
GPIO.setup(RELAY_PIN_1, GPIO.OUT)
# turn off the relay
print("Turn off pin")
GPIO.setup(RELAY_PIN_1, GPIO.LOW)
