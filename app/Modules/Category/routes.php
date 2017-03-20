<?php

Route::group(['middleware' => ['web']], function () {

    $namespace = 'App\Modules\Category\Controllers';

    Route::get('{categoryType}', $namespace . '\CategoryController@index');
    Route::post('{categoryType}/store', $namespace . '\CategoryController@store')->name('make-group');
    Route::get('{categoryType}/{id}/{name}', $namespace . '\CategoryController@show')->name('category-detail');

});
