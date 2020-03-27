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
Route::get('task', 'SuratController@task')->name('surat.task');
Route::post('storetask', 'SuratController@storeTask');
Route::get('send/{id}', 'SuratController@penerima');
Route::put('sendpenerima/{id}', 'SuratController@storePenerima');
Route::get('archive', 'SuratController@taskArchive');
});

Route::group(["prefix"=>"user/"], function(){
Route::get('information', 'SuratController@information')->name('user.information');
Route::get('editinformation', 'SuratController@editInformation');
Route::put('updateinformation/{id}', 'SuratController@updateInformation');
});

Route::group(["prefix"=>"admin/"], function(){
//------- Pejabat ----------
Route::get('pejabat', 'AdminController@pejabat')->name('admin.pejabat');
Route::post('storepejabat', 'AdminController@storePejabat');
Route::get('editpejabat/{id}', 'AdminController@editPejabat');
Route::put('updatepejabat/{id}', 'AdminController@updatePejabat');
Route::delete('destroypejabat/{id}', 'AdminController@destroyPejabat');
//------- Role ----------
Route::get('role', 'AdminController@role')->name('admin.role');
Route::post('storerole', 'AdminController@storeRole');
Route::delete('destroyrole/{id}', 'AdminController@destroyRole')->name('admin.destroyrole');
//------- Manage User ----------
Route::get('manageuser', 'AdminController@user');
});