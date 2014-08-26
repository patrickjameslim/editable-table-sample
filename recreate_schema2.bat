mysql -u root -p -e "DROP SCHEMA quezelco"
mysql -u root -p -e "CREATE SCHEMA quezelco"
php artisan migrate --package=cartalyst/sentry
php artisan migrate
php artisan db:seed