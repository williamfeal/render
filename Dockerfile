FROM wordpress:latest

# Copia los archivos locales al contenedor
COPY . /var/www/html

EXPOSE 80
