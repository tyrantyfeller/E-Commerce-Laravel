#!/bin/sh

composer install --ignore-platform-reqs
cp .env.local.example .env
php artisan key:generate
php artisan migrate
chmod -R 777 storage/*
chmod -R 777 bootstrap/cache/*
npm install
npm run dev
sh /bootstrap/start.sh
