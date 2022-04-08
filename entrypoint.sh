#!/bin/bash
PSTARTPATH="/var/www/html/press-start"

echo "Configurando conexão com Banco de Dados"
# Configurando database.php
sed -i "s,HOSTBANCO,$DBHOST,g" ${PSTARTPATH}/conecta.php
sed -i "s,NOMEBANCO,$DBNAME,g" ${PSTARTPATH}/conecta.php
sed -i "s,USERBANCO,$DBUSER,g" ${PSTARTPATH}/conecta.php
sed -i "s,SENHABANCO,$DBPASS,g" ${PSTARTPATH}/conecta.php

echo "Definindo contexto"
if [ ! -z "$CONTEXTO" ]
then
	mv ${PSTARTPATH}/ /var/www/html/$CONTEXTO
	echo "Alterou o Contexto"
else
	echo "Nao alterou o Contexto"
fi

echo "Definindo permissões"
chown www-data:www-data -R /var/www/html
chmod -R 777 /var/www/html

echo "Executando entrypoint"
/usr/local/bin/docker-php-entrypoint apache2-foreground
