Use CakePHP.

Set up root .htaccess:
  
```apacheconfig
<IfModule mod_rewrite.c>
        RewriteEngine On
        RewriteRule ^whatisdfc$ /dfcusa/pages/whatisdfc [NE,R=301,L]
        RewriteRule ^getstarted$ /dfcusa/pages/getstarted [NE,R=301,L]
        RewriteRule ^documents$ /dfcusa/pages/documents [NE,R=301,L]
        RewriteRule ^projects$ /dfcusa/pages/projects [NE,R=301,L]
        RewriteRule ^faq$ /dfcusa/pages/faq [NE,R=301,L]
        RewriteRule ^aboutus$ /dfcusa/pages/aboutus [NE,R=301,L]
        RewriteRule ^volunteer$ /dfcusa/pages/volunteer [NE,R=301,L]
        RewriteRule ^press$ /dfcusa/pages/press [NE,R=301,L]
        RewriteRule ^partners$ /dfcusa/pages/partners [NE,R=301,L]
        RewriteRule ^contactus$ /dfcusa/pages/contactus [NE,R=301,L]
        RewriteRule ^judging$ /dfcusa/pages/judging [NE,R=301,L]
        RewriteRule ^submit$ /dfcusa/pages/submit [NE,R=301,L]
        RewriteRule ^(.*)$ /dfcusa/$1 [NC]
</IfModule>
```


---------------------------------


## Development Instructions

The resources (styles) & assets are now maintained by webpack based on mix.
To build and develop, first install all npm dependencies.

```console
npm install
```

or

```console
npm i
```


### Asset Compilation

Once the dependencies are installed you may build the assets.

Compile assets in development environment.

```console
npm run dev
```

Compile assets in development environment & watch for changes.

```console
npm run watch
```

To compile assets in production environment (compile & minify) run:

```console
npm run prod
```

### Host with dev. server

Go to app/webroot directory and host with the php's built-in
development server: `php -S <ip>:<port> router.php`

```console
cd app/webroot
php -S 0.0.0.0:9900 router.php
```

