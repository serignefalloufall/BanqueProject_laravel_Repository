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




