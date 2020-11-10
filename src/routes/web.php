<?php

Route::group([
    'namespace' => "App\\Http\\Controllers",
], function () {
    Route::get('cup_site/{titolo}', 'CupSiteController@page')->name('cup_site');
});


