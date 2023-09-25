###############################################################################################
# theflashback - BASE
###############################################################################################
FROM php:8.2-apache as theflashback-base

WORKDIR /usr/share/nginx/html

# update the image
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install vim -y
RUN apt-get install net-tools -y
RUN apt-get install dos2unix -y

###############################################################################################
# theflashback - DEPLOY
###############################################################################################
FROM theflashback-base as theflashback-deploy

COPY src/ /var/www/html/

# publish app
EXPOSE 80
