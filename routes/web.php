<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function() {
    Route::get('/', 'MainController@index')->name('index');
    Route::resource('/categories', 'CategoryController');
});

