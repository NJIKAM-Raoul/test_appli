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

// Route::get('/', function () {
//     return view('welcome');  
// });

Route::name('root_path')->get('/',  'PagesController@homes');

Route::get('/about', 'PagesController@about')->name('about_path');

Route::resource('/pages', 'EnfantController');

Route::get('/imprime', 'PagesController@imprimer')->name('impression');

Route::get('/index', [
    'as' => 'index_path',
    'uses' => 'EnfantController@index'
]);