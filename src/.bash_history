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
cls
clear
php artisan make:migration create_roles_table
php artisan make:migration create_user_role_table
php artisan migrate
clear
php artisan migrate
php artisan migrate:reset
php artisan migrate:reset
php artisan migrate:fresh
php artisan make:request createUserRequest
php artisan make:model Role
php artisan make:request LoginRequest
cls
clear
exit
