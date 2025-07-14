#!/bin/bash

# Pre-Deploy Command untuk Aplikasi Tiket Kereta
echo "Preparing Tiket Kereta Application for deployment..."

# Membuat direktori storage yang diperlukan
mkdir -p storage/framework/cache storage/framework/sessions storage/framework/testing storage/framework/views

# Install Composer dependencies
echo "Installing Composer dependencies..."
composer install --no-interaction --prefer-dist --optimize-autoloader

# Install NPM dependencies
echo "Installing NPM dependencies..."
npm install

# Build assets
echo "Building assets..."
npm run build

# Create storage link
echo "Creating storage link..."
php artisan storage:link

echo "Config clear..."
php artisan config:clear
php artisan cache:clear

echo "Waiting for MySQL to be ready..."
sleep 20

echo "Migrating database..."
php artisan migrate --force

echo "Migration status:"
php artisan migrate:status

echo "Seeding database..."
php artisan db:seed --force

echo "Pre-deploy completed successfully!" 
