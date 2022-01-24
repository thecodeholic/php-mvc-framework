FROM php:8.1-apache

# Copy virtual host into container
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Enable rewrite mode
RUN a2enmod rewrite

WORKDIR /var/www

# Change the owner of the container document root
RUN chown -R www-data:www-data /var/www

CMD ["apache2-foreground"]

