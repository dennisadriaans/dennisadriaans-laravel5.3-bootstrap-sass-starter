<?php


Route::group(['middleware' => ['web']], function () {

    $namespace = 'App\Modules\FacebookAuth\Controllers';

    Route::get('/facebook/login', $namespace . '\AuthController@loginPage');
    Route::get('/facebook/callback', $namespace . '\AuthController@callback');

});