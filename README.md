How to install local machine:
•	Download and install git https://git-scm.com/downloads
•	Download and install composer https://getcomposer.org/download/
•	git clone https://github.com/paulquickstart/fireclearance.git
•	set database fireclearance
•	edit the env.
•	Run the command
    o	composer update
    o	php artisan key:generate
    o	php artisan migrate
    o	php artisan db:seed –class=RoleSeeder
    o	composer dump autoload
    o	php artisan config:cache
    o	php artisan serve
