## Wow website

Simple website used to create accounts in a 1.12.1 Mangos Classic server.

### Requirements:

- php 5.6+, composer http://www.getcomposer.org
- Bower http://bower.io/
- Node and npm https://nodejs.org/en/
- Browserify ```sudo npm install -g browserify``` and extras:
    - ```sudo npm install -g watchify```
    - ```sudo npm install -g minifyify```

### Development deploy:

- If you **don't** have a wow server, run ```database/sql/create.sql```
- Copy and configure ```.env.example``` to ```.env```
- Deploy with apache/nginx like a normal laravel site.
- cd wowsite && composer install
- cd public && bower update

For automatic assets building:

```bash 
cd project-root

# if fresh install:
chmod +x scripts/watch.sh 

# In a dedicated terminal as possible
scripts/watch.sh
```

### TODO

- ~~Character creation~~
- User login with realmd database on site
- Change password
- Character list
- superadmin backend?
- mail notifications?
- Some fancy design? 

