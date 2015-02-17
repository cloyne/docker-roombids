#!/usr/bin/python

# This script accepts the list of e-mail addresses of new users.
# Each e-mail address on its own line. And outputs a CSV file
# you can use to import new users into the blog. The list of e-mail
# addresses you can for example get from Sympa mailing list, going
# to the admin page for managing the subscribers and choose "dump".

import re
import fileinput

print 'user_login,user_email,role'

for line in fileinput.input():
    line = line.strip()
    print '%s,%s,author' % (line.split('@')[0], line)
