How to install local machine:
- Download and install git https://git-scm.com/downloads
- Download and install composer https://getcomposer.org/download/
- git clone https://github.com/paulquickstart/fireclearance.git
- set database fireclearance
- edit the env.
Run the command
 - composer update
 - php artisan key:generate
 - php artisan migrate
 - php artisan db:seed –class=RoleSeeder
 - composer dump autoload
 - php artisan config:cache
 - php artisan serve

