How to install local machine:
- Download and install git https://git-scm.com/downloads
- Download and install composer https://getcomposer.org/download/
- git clone https://github.com/paulquickstart/fireclearance.git
- set database fireclearance
- edit the env.
<br>
Run the command
 - composer update <br>
 - php artisan key:generate <br>
 - php artisan migrate <br>
 - php artisan db:seed –class=RoleSeeder <br>
 - composer dump autoload <br>
 - php artisan config:cache <br>
 - php artisan serve <br>

