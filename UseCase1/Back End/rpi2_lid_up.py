from time import *
from adafruit_servokit import ServoKit

kit = ServoKit(channnels=16)

kit.continuous_servo[0].throttle = -1

print("Opening the lid")
sleep(5.5)
print("The lid is open")

kit.continuous_servo[0].throttle = 0
