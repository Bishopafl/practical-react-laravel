FROM php:8.1-fpm-alpine

# Install necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /app

# Copy the application code into the container
COPY . .

# Ensure the /app directory and relevant subdirectories have the correct permissions
RUN chmod -R 775 /app && \
    chown -R www-data:www-data /app

# Install PHP dependencies
RUN composer install

# Command to run Laravel's internal server
CMD php artisan serve --host=0.0.0.0
