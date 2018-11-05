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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/home', function(){
   return redirect('/');
});

Artisan::call('view:clear');

Auth::routes();
Route::get('/','SiteController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/obo-mne','AboutController@about')->name('about');
Route::get('/kontakty','ContactController@contact')->name('contact');
//Route::get('/download','S');
Route::group([
    'prefix'=>'admin',
    'namespace'=>'Admin',
    'as'=>'admin.',
    'middleware'=>'auth'
], function () {
    Route::get('/', 'AdminController@index')->name('admin');
});
