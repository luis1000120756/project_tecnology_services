php artisan make:controller user/UserController
clear
php artisan make:controller user/UserController
php artisan migrate:reset
php artisan migrate
exit
composer require laravel/socialite
clear
docker exec -it -u root laravel-app bash
exit
php artisan migrate:rollback
php artisan migrate
php artisan storage:link
php artisan storage:link
cls
clear
php --ini
echo "max_execution_time=600
max_input_time=600
memory_limit=512M
upload_max_filesize=50M
post_max_size=50M" > /usr/local/etc/php/conf.d/custom.ini
docker exec -it --user root laravel-app bash
docker ps
exit
php -i | grep "max_execution_time"
php -i | grep "upload_max_filesize"
exit
v
php -i | grep "max_execution_time"
php -i | grep "upload_max_filesize"
exit
