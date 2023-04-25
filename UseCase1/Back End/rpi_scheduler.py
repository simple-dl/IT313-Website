import sys
from crontab import CronTab
import datetime
import time
import math

def water_lights_funcs(n, days):
  with CronTab(user='pi') as cron:
    cron.remove_all(comment='water_light')
    
    current_time = datetime.datetime.now()
    start_minute = current_time.minute + 1 + current_time.hour * 60
    interval = 24 * 60 // n
    for i in range(n * days):
      minute = (start_minute + i * interval) % (60 * 24)
      hour, minute = divmod(minute, 60)
      command = "python3 /home/pi/lights-{}.py".format('on' i if % 2 == 0 else 'off')
      if i % 2 == 0:
        command += " && python3 /home/pi/pump.py"
      job = cron.new(command)
      job.set_comment('water_light')
      job.setall(f"{minute} {hour} */1 * *")
      
    cron.write()
    
 if __name__ == '__main__':
     length_planted = int(sys.argv[1])
     water_perday = int(sys.argv[2])
     light_perday = int(sys.argv[3])
     cover_perday = int(sys.argv[4])
  
     water_lights_funcs(light_perday, length_planted)
