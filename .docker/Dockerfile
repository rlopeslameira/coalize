FROM php:7.1-apache

# Copy application files to contaier
COPY . /var/www/html/

# Copy PHP config file to container
COPY .docker/php/php.ini /usr/local/etc/php/

RUN apt-get update

# Install libzip
RUN apt-get install -y libzip-dev

# Install unzip
RUN apt-get install -y unzip

RUN sudo apt-get install libpng-dev

# Install PDO
RUN docker-php-ext-install pdo 
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install gd

# enable pdo and pdo_mysql
RUN docker-php-ext-enable pdo 
RUN docker-php-ext-enable pdo_mysql 
RUN docker-php-ext-enable mysqli
RUN docker-php-ext-enable gd

# Install zip by docker-php-ext tool
RUN docker-php-ext-install zip

# Enable mod rewrite
RUN a2enmod rewrite

# Install APCu
RUN pecl install apcu
RUN echo "extension=apcu.so" > /usr/local/etc/php/conf.d/apcu.ini

# Install git
RUN apt-get install -y git

# Install composer and make command global
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=1.10.27
RUN composer --version

# Set property permissions to files
RUN chown -R www-data:www-data /var/www/html