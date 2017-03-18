<?php

Route::group(['middleware' => ['web']], function () {

    $namespace = 'App\Modules\Facebook\Controllers';

    /* Facebook login */
    Route::get('user/dennis', [
        'uses'  => $namespace . '\FacebookProfileController@getUser',
        'as'    => 'get-facebook-user'
    ]);

});