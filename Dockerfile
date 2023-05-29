###############################################################################################
# theflashback - BASE
###############################################################################################
FROM nginx:1.25.0 as theflashback-base

WORKDIR /usr/share/nginx/html

# update the image
RUN apt-get -o Acquire::Check-Valid-Until=false -o Acquire::Check-Date=false update
RUN apt-get upgrade -y
RUN apt-get install vim -y
RUN apt-get install net-tools -y
RUN apt-get install dos2unix -y

###############################################################################################
# theflashback - DEPLOY
###############################################################################################
FROM theflashback-base as theflashback-deploy

COPY . .

# publish app
EXPOSE 80
