<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/region/add', 'RegionController@add')->name('addregion');
Route::get('/region/edit/{id}', 'RegionController@edit')->name('editregion');
Route::post('/region/update', 'RegionController@update')->name('updateregion');
Route::get('/region/delete/{id}', 'RegionController@delete')->name('deleteregion');
Route::get('/region/liste', 'RegionController@liste')->name('listeregion');
Route::post('/region/persist', 'RegionController@persist')->name('persistregion');

Route::get('/client/add', 'ClientController@add')->name('addclient');
Route::get('/client/edit/{id}', 'ClientController@edit')->name('editclient');
Route::post('/client/update', 'ClientController@update')->name('updateclient');
Route::get('/client/delete/{id}', 'ClientController@delete')->name('deleteclient');
Route::get('/client/liste', 'ClientController@liste')->name('listeclient');
Route::post('/client/persist', 'ClientController@persist')->name('persistclient');

Route::get('/compte/add', 'CompteController@add')->name('addcompte');
Route::get('/compte/edit/{id}', 'CompteController@edit')->name('editcompte');
Route::post('/compte/update', 'CompteController@update')->name('updatecompte');
Route::get('/compte/delete/{id}', 'CompteController@delete')->name('deletecompte');
Route::get('/compte/liste', 'CompteController@liste')->name('listecompte');
Route::post('/compte/persist', 'CompteController@persist')->name('persistcompte');


