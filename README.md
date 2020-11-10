# laravel-cupparis-site

installazione

```    
php artisan vendor:publish --provider="Marley71\Cupparis\App\CupSite\CupSiteServiceProvider"
composer dump-autoload
php artisan install-cupparis-package cupparis-site
php artisan migrate
php artisan db:seed --class=CupPageSeeder
#ln -s ../../../../vendor/components/flag-icon-css/css/flag-icon.css public/admin/assets/css/flag-icon.css
#ln -s ../../../vendor/components/flag-icon-css/flags public/admin/assets/flags
```


disinstallazione

```    
#rm public/admin/assets/css/flag-icon.css
#rm public/admin/assets/flags

php artisan uninstall-cupparis-package cupparis-site --json
php artisan migrate:rollback
rm -f database/migrations/*create_cup_pages_*.php
#rm -f database/migrations/*create_datafile_cup_geo_*.php
```  
