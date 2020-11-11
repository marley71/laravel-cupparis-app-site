<?php

Route::group([
    'namespace' => "App\\Http\\Controllers",
], function () {
    $prefix = config('cupparis-site.route_prefix');
    Route::get("$prefix/{titolo}", 'CupSiteController@page')->name('cup_site');
});


