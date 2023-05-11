# This file is a necessary component for the User to successfully initiate a preset on the Backend
# It forward requests from the website to the EC2 API Instance
import sys
import logging
logging.basicConfig(stream=sys.stderr)
sys.path.insert(0,"/var/www/html/")
sys.path.insert(1,"/var/www/html/api")
from api import app as application
application.secret_key = 'your_secret_key'
