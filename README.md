# Devmarketer Blog/CMS course

# This tutorial is, actuali, not complete because the functionality crud of Posts is not included.


8. ep.25
- Laraflash
  - composer require devmarketer/laraflash
  - php artisan vendor:publish --tag=laraflash

7. ep.23
- API token autentication
  - php artisan migrate:reset
  - add api_token on user migration
  - php artisan migrate
  - add openssl_random function on user migration
  - php artisan db:seed
- User
  - UserObserver
  - php artisan make:provider ObserverServiceProvider

6. ep 22
- slug 
  - yarn add slug --dev

5. ep.20
- posts estruture
  - php artisan make:migration create_posts_table --create=posts
    - campos de relacionamento entre tableas devem ser bigInteger()->unsigned()
    - php artisan migrate
  - php artisan make:controller PostController
  - route resource

4. ep.10
- laratrust instalation
  - url: laratrust.readthedocs.io
  - commands
    - composer require "santigarcor/laratrust:4.0.*"
    - php artisan vendor:publish --tag="laratrust"
    - php artisan laratrust:migration
    - php artisan migrate
    - php artisan make:model Role
    - php artisan make:model Permission
    - edit model User
      - composer dump-autoload
    - edit laratrust_seeder
      - composer dump-autoload
      - php artisan db:seed

3. ep.9
- commands
  - npm run watch
  - php artisan serve
  
2. ep.8
- artisan commands
  - php artisan make:auth
    - instala os layouts alem da autenticação
    
1. ep.7 
- create project
  - laravel new cms
- install steps
  - npm install
  - npm install bulma
  - npm install buefy
  - npm install font-awesome
  - npm run dev
