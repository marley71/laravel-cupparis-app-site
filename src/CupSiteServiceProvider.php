<?php namespace Marley71\Cupparis\App\Site;

use Gecche\Cupparis\App\Foorm\FoormManager;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Spatie\Activitylog\Models\Activity;

class CupSiteServiceProvider extends ServiceProvider
{


    /**
     * Booting
     */
    public function boot()
    {

        //Publishing configs
        $this->publishes([
            __DIR__ . '/../config/cupparis-site.php' => config_path('cupparis-site.php'),
            __DIR__ . '/../config/foorms' => config_path('foorms'),
        ], 'config');

//        $this->publishes([
//            __DIR__ . '/../config/datafile-foorms' => config_path('foorms'),
//        ], 'config-datafile-foorms');

        $this->publishes([
//            __DIR__ . '/../config/themes.php' => config_path('themes.php'),
            __DIR__ . '/../cupparis-app-site.json' => base_path('cupparis/cupparis-app-site.json'),
        ], 'config-json');

        //Publishing and overwriting app folders
        $this->publishes([
            __DIR__ . '/../app/Foorm' => app_path('Foorm'),
//            __DIR__ . '/../app/Foorm/CupSitePage' => app_path('Foorm/CupSitePage'),
//            __DIR__ . '/../app/Foorm/CupSitePage' => app_path('Foorm/CupSiteNews'),
//            __DIR__ . '/../app/Foorm/CupSitePage' => app_path('Foorm/CupSiteSetting'),
            __DIR__ . '/../app/Models' => app_path('Models'),
            //__DIR__ . '/../app/Models/Relations' => app_path('Models/Relations'),
            __DIR__ . '/../app/Policies' => app_path('Policies'),
//            __DIR__ . '/../app/Services' => app_path('Services'),
//            __DIR__ . '/../app/Http/Kernel.php' => app_path('Http/Kernel.php'),
            __DIR__ . '/../app/Http/Controllers/CupSiteController.php' => app_path('Http/Controllers/CupSiteController.php'),
//            __DIR__ . '/../app/Http/Controllers/DownloadController.php' => app_path('Http/Controllers/DownloadController.php'),
//            __DIR__ . '/../app/Http/Kernel.php' => app_path('Http/Kernel.php'),
        ], 'models');

//        $this->publishes([
//            __DIR__ . '/../app/DatafileModels' => app_path('DatafileModels'),
//            __DIR__ . '/../app/DatafileProviders' => app_path('DatafileProviders'),
////            __DIR__ . '/../app/Models/Relations' => app_path('Models/Relations'),
//        ], 'datafile-models');


        if ($this->app->runningInConsole()) {
            // Export the migration
            if (! class_exists('CreateCupPagesTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_cup_site_pages_table.php' => database_path('migrations/' . date('Y_m_d_His', time()-99) . '_create_cup_site_pages_table.php'),
                    __DIR__ . '/../database/migrations/create_cup_site_settings_table.php' => database_path('migrations/' . date('Y_m_d_His', time()-98) . '_create_cup_site_settings_table.php'),
                    __DIR__ . '/../database/migrations/create_cup_site_news_table.php' => database_path('migrations/' . date('Y_m_d_His', time()-97) . '_create_cup_site_news_table.php'),
                    __DIR__ . '/../database/migrations/create_cup_site_fotos_table.php' => database_path('migrations/' . date('Y_m_d_His', time()-96) . '_create_cup_site_fotos_table.php'),
                    __DIR__ . '/../database/migrations/create_cup_site_attachments_table.php' => database_path('migrations/' . date('Y_m_d_His', time()-95) . '_create_cup_site_attachments_table.php'),
                    __DIR__ . '/../database/migrations/create_cup_site_videos_table.php' => database_path('migrations/' . date('Y_m_d_His', time()-94) . '_create_cup_site_videos_table.php'),

                    // you can add any number of migrations here
                ], 'migrations');
            }
        }
//        if ($this->app->runningInConsole()) {
//            // Export the migration
//            if (! class_exists('CreateCupGeoNazioniTable')) {
//                $this->publishes([
//                    __DIR__ . '/../database/datafile-migrations/create_datafile_cup_geo_comuni_aggiuntive.php' => database_path('migrations/' . date('Y_m_d_His', time()-89) . '_create_datafile_cup_geo_comuni_aggiuntive.php'),
//                    __DIR__ . '/../database/datafile-migrations/create_datafile_cup_geo_comuni_istat.php' => database_path('migrations/' . date('Y_m_d_His', time()-88) . '_create_datafile_cup_geo_comuni_istat.php'),
//                    __DIR__ . '/../database/datafile-migrations/create_datafile_cup_geo_nazioni_istat.php' => database_path('migrations/' . date('Y_m_d_His', time()-87) . '_create_datafile_cup_geo_nazioni_istat.php'),
//                    // you can add any number of migrations here
//                ], 'datafile-migrations');
//            }
//        }
        //Publishing and overwriting databases folders
        $this->publishes([
            //__DIR__ . '/../database/dump' => database_path('dump'),
            __DIR__ . '/../database/seeds' => database_path('seeds'),
        ], 'db');

        //Publishing and overwriting resources folders
        $this->publishes([
//            __DIR__ . '/../resources/documenti' => base_path('resources/documenti'),
            //__DIR__ . '/../resources/lang' => base_path('resources/lang'),
//            __DIR__ . '/../resources/views/bootstrap4/includes' => base_path('resources/views/bootstrap4/includes'),
        ], 'models-confs');

        //Publishing and overwriting public folders
        $this->publishes([
            __DIR__ . '/../public/admin/ModelConfs' => public_path('admin/ModelConfs'),
            __DIR__ . '/../public/cup_site' => public_path('cup_site'),
            __DIR__ . '/../public/admin/pages' => public_path('admin/pages'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/../resources/views/cup_site' => resource_path('views/cup_site'),
            //__DIR__ . '/../public/admin/pages' => public_path('admin/pages'),
        ], 'template');

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->bootActivityLog();

        $this->bootValidationRules();

    }

    protected function bootActivityLog()
    {
//        Activity::saving(function (Activity $activity) {
//            $activity->properties = $activity->properties->put('ip', request()->getClientIp());
//            $activity->properties = $activity->properties->put('user_agent', request()->userAgent());
//        });
    }

    protected function bootValidationRules()
    {

//        Validator::extend('captcha', 'Gecche\Cupparis\App\Validation\Rules@captcha');
    }
}
