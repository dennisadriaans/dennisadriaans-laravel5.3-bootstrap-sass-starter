<?php

Route::group(['middleware' => ['web']], function () {


    $namespace = 'App\Modules\User\Controllers';

    Route::get('profile/{userID}', $namespace . '\UserController@show');
});