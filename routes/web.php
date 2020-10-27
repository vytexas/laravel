<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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

Route::get('/', 'App\Http\Controllers\CompanyController@index');
Route::get('/register', 'App\Http\Controllers\CompanyController@registerCompany');




Route::post('/store', 'App\Http\Controllers\CompanyController@registerstore'); //saugo irasa

Route::get('delete/{id}','App\Http\Controllers\CompanyController@delete')->name("delete-firm"); //trina irasa
Route::get('edit/{id}','App\Http\Controllers\CompanyController@editFirm')->name("edit-firm"); //redaguoja irasa

Route::post('update-firm/{id}','App\Http\Controllers\CompanyController@update')->name("update-firm");


// Route::get('/portfolio', 'App\Http\Controllers\CompanyController@portfolio');
