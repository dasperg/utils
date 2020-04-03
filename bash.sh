#!/bin/bash

LOG_FILE=/var/log/utils.log

# redirect STDERR to STDOUT and append (note the double >>) both to /tmp/outfile
exec 1>> $LOG_FILE 2>&1
