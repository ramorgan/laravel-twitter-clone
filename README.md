# Tweety (twitter clone laravel learning project)

# Instructions

###*@todo: put this in an init script*
- copy `.docksal/artifact/.env.dev` to `web/.env`
- `cd web` change dir into the main web app dir
- `fin up` start docksal 
- Set up environment
    - Mysql
      - `fin mysql`
      - `create database tweety`
      - `exit`
    - Composer and NPM
      - `fin bash`
      - `composer install` composer setup
      - `npm install` download npm packages
      - `npm run dev` put npm stuff where it needs to go
    - Laravel / Artisan things
      - `artisan storage:link` 
- Fill in variables
  - `fin artisan key:generate`
  - `fin atrisan migrate` create db tables and structure
    
-Create a user for uid:1
    - http://twitter-clone.docksal/register
- add content to test the site with factorys (optional)
    - `fin artisan tinker`  
