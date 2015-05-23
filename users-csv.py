#!/usr/bin/python

# This script accepts the list of e-mail addresses of new users.
# Each e-mail address on its own line. And outputs a CSV file
# you can use to import new users into the blog. The list of e-mail
# addresses you can for example get from Sympa mailing list, going
# to the admin page for managing the subscribers and choose "dump".

import re
import fileinput

print 'user_login,user_email,display_name,role'

for line in fileinput.input():
    line = line.strip()
    split_line = line.split(' ', 1)
    if len(split_line) > 1:
        address = split_line[0]
        name = split_line[1]
    else:
        address = split_line[0]
        name = ''

    print '%s,%s,%s,author' % (address.split('@')[0], address, name)
