<?php

use Illuminate\Support\Facades\Route;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::get('/services' , 'ServicesController@index')->name('services');
    Route::group(['middleware' => \App\Http\Middleware\Admin::class] , function(){
        Route::get('/create-service' , 'ServicesController@create')->name('create.service');
        Route::post('/add-service' , 'ServicesController@store')->name('add.service');

    });

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about_us', 'AboutUsController@index')->name('about.us');
    Route::get('/home#contact-sec', 'HomeController@index')->name('contact.us');
    Route::get('/home?type={type}#contact-sec', 'HomeController@show')->name('contact.us.type');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


});
