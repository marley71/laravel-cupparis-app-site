# laravel-cupparis-site

installazione

```    
php artisan vendor:publish --provider="Marley71\Cupparis\App\Site\CupSiteServiceProvider"
composer dump-autoload
php artisan install-cupparis-package cupparis-app-site
php artisan migrate
php artisan db:seed --class=CupSitePageSeeder

```


disinstallazione

```    
php artisan uninstall-cupparis-package cupparis-app-site --json
php artisan migrate:rollback
rm -f database/migrations/*create_cup_site_pages_*.php
rm -rf resources/views/cup_site
rm -f app/Http/Controllers/CupSiteController.php

```  
