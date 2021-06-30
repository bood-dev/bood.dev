<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\LaravelLocalization;

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

$localization = new LaravelLocalization();

Route::group(
    [
        'prefix' => $localization->setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function() {
    
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::get('/projects', 'ProjectController@index')->name('project.index');
    Route::get('/projects/{slug}', 'ProjectController@show')->name('project.show');
    
    Route::get('/cv', 'CVController@index')->name('cv.index');
    
    Route::get('/blog', 'BlogController@index')->name('blog.index');
    Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');

});
