FROM chialab/php:7.2-apache

USER www-data

ADD source/ /var/www/html/press-start

USER root

COPY entrypoint.sh /opt/run

<<<<<<< HEAD
WORKDIR /var/www/html

=======
>>>>>>> d3cb3580816e7739ccbea5187a536ff73dd5c1da
RUN chmod +x /opt/run

ENTRYPOINT ["/opt/run"]