#!/bin/bash
sudo yum install httpd php php-mysql -y
sudo yum update -y
chkconfig httpd on
