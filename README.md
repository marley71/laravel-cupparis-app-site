# laravel-cupparis-site

installazione

```    
php artisan vendor:publish --provider="Marley71\Cupparis\App\Site\CupSiteServiceProvider"
composer dump-autoload
php artisan install-cupparis-package cupparis-app-site
php artisan migrate
php artisan db:seed --class=CupSiteSeeder
php7.2 artisan breeze:relations CupSiteNews

```


disinstallazione

```    
php artisan uninstall-cupparis-package cupparis-app-site --json
php artisan migrate:rollback
rm -f database/migrations/*create_cup_site_*.php
rm -rf public/cup_site
rm -rf resources/views/cup_site
rm -f app/Http/Controllers/CupSiteController.php
rm -rf app/Foorm/CupSitePage
rm -f app/Models/Relations/CupSite*

```  
