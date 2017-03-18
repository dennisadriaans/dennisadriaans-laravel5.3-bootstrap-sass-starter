<?php

Route::group(['middleware' => ['web']], function () {


    $namespace = 'App\Modules\Category\Controllers';

    Route::get('{categoryType}', $namespace . '\CategoryController@index');
    Route::get('{categoryType}/{id}', $namespace . '\CategoryController@show')->name('category-detail');

});