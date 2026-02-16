# The following is just a reference note for [me](https://github.com/fuad023)😄.

## getting started w/ [thecodeholic](https://youtu.be/_iuxZygxz98?si=NUHt8ogoSas7P1DO)

```
cd ~/Codes/projects/
laravel new laravel-api-by-thecodeholic
```

| Option                  | Select    |
| ----------------------- | --------- |
| starter kit             | *none*    |
| testing framework       | *phpunit* |
| install laravel boost   | *no*      |
| database                | *mysql*   |
| run database migrations | *no*      |
| run npm commands        | *no*      |

```
# to setup mysql
sudo mysql
CREATE DATABASE thecodeholic;
CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON thecodeholic.* to 'username'@'localhost';
FLUSH PRIVILEGES;
EXIT;


cd laravel-api-by-thecodeholic/
code .

nano .env
```

#### update as follows:  
`DB_USERNAME=username`  
`DB_PASSWORD=password`


```
# save n exit
php artisan migrate

php artisan serve
# visit [http://127.0.0.1:8000/]

git init
git add .
git commit -m "initial commit"
```

## installing api

```
#1 - using command
php artisan install:api
# new db migration: yes

#2 - using package: laravel breeze
```

## miscellaneous

```
# to list all registered routes
php artisan route:list

# to display basic information about your application
php artisan about

# to create controller, named as [PostController]
php artisan make:controller PostController

# to create api controller, at [Api/V1/PostController], provides default crud methods
php artisan make:controller Api/V1/PostController --api

# to create db model, -m flag to apply migration
php artisan make:model Post -m

# to drop all tables and re-run all migrations
php artisan migrate:fresh

# to rollback migration one step behind
php artisan migrate:rollback --step=1

# route/model binding

#
php artisan make:resource PostResource
```
## authentication w/ breeze
```
# to scafford project with authentication
composer require laravel/breeze --dev
php artisan breeze:install
# stack: api only
# testing framework: pest
# db migration: yes
```

## installing postman

goto [gh:gist](https://gist.github.com/prrao87/114933c4638a4f77aa3d4b2c5a3b2477)  
follow the procedure

#### to uninstall postman

```
sudo rm -rf /opt/Postman /usr/bin/postman /usr/share/applications/postman.desktop
sudo rm -rf ~/.config/Postman ~/.cache/Postman ~/.local/share/Postman
```

## installing dbeaver

```
sudo add-apt-repository ppa:serge-rider/dbeaver-ce
sudo apt update
sudo apt install dbeaver-ce
```

## installing mysql workbench

goto [mysql:download](https://dev.mysql.com/downloads/workbench/)  
select ubuntu linux 24.4 64-bit  
download NOT the dbgsym one  
open the .deb file using file manager and install it, **or**
```
# goto location where the file is loacted
sudo dpkg -i mysql-workbench-community_8.0.46-1ubuntu24.04_amd64.deb
```
will throw some dependency missing errors, to fix them
```
sudo apt --fix-broken install
sudo dpkg -i mysql-workbench-community_8.0.46-1ubuntu24.04_amd64.deb # run it again
```
