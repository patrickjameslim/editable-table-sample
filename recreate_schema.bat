mysql -u root -e "DROP SCHEMA quezelco"
mysql -u root -e "CREATE SCHEMA quezelco"
php artisan migrate --package=cartalyst/sentry
php artisan migrate
php artisan db:seed