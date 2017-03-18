<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@returnHomeView');

//Route::get('/login', '');
//Route::get('/events', '');
//Route::get('/events/{name}/', '');
//Route::get('/p/{userName}', '');
//Route::get('/group/{groupID}', '');




Route::group(['middleware' => ['auth']], function () {
    Route::get('/bootstrap', 'HomeController@returnBootstrap');
});

