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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//surat
Route::group(["prefix"=>"surat/"], function(){
Route::get('task', 'SuratController@task');
Route::get('archive', 'SuratController@archive');
});

Route::group(["prefix"=>"user/"], function(){
Route::get('information', 'SuratController@information');
});