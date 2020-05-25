<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');
    Route::get('contacts/','AdminController@list');

    Route::get('setting/','AdminController@info');
    Route::post('setting/{id}', 'AdminController@update')->name('update');

});
