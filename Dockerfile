FROM chialab/php:7.2-apache

USER www-data

ADD source/ /var/www/html/press-start

USER root

COPY entrypoint.sh /opt/run

WORKDIR /var/www/html

RUN chmod +x /opt/run

ENTRYPOINT ["/opt/run"]
