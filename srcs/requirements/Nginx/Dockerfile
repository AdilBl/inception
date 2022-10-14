FROM alpine:3.15

RUN apk update
RUN apk upgrade
RUN apk add nginx openssl openrc

RUN mkdir -p /var/www/html
COPY ./src/serv.conf /etc/nginx/http.d/default.conf

RUN mkdir -p /etc/nginx/ssl
RUN openssl req -nodes -x509 -sha256 -newkey rsa:4096 -keyout /etc/nginx/ssl/key.pem -out /etc/nginx/ssl/cert.pem -days 365 -subj "/C=FR/ST=RHONE_ALPES/L=LYON/O=INCEPTION/CN=abelache.42.fr"

RUN rc-update add nginx default
EXPOSE 443
CMD [ "nginx" , "-g" , "daemon off;" ]