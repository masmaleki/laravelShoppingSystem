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

Route::get('/', function () {
    return redirect(app()->getLocale());
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'], function() {

    Route::get('/', function () {
        return view('index');
    })->name('main');
    Auth::routes();

    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/home', 'HomeController@home')->name('home');
    Route::get('/events', 'HomeController@events')->name('events');
    Route::get('/events/{slug}', 'HomeController@ShowEvent')->name('ShowEvent');
    Route::get('/services/{slug}', 'HomeController@ShowService')->name('showService');
    Route::get('/products/{slug}', 'HomeController@products')->name('products');
    Route::get('/products/{slug}/{id}', 'HomeController@product')->name('product');
    Route::get('/products/filter/tag/{id}', 'HomeController@tagProducts')->name('tagProducts');
    Route::get('/contact-us', 'HomeController@contact')->name('contact');

});
Route::post('/contact/submit', 'HomeController@contactSubmit')->name('contactSubmit');