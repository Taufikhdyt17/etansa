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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');

//surat
Route::group(["prefix"=>"surat/"], function(){
Route::get('task', 'SuratController@task');
Route::get('archive', 'SuratController@archive');
});

Route::group(["prefix"=>"user/"], function(){
Route::get('information', 'SuratController@information');
});

Route::group(["prefix"=>"admin/"], function(){
Route::get('pejabat', 'AdminController@pejabat');
Route::get('role', 'AdminController@role');
Route::get('manageuser', 'AdminController@user');
});