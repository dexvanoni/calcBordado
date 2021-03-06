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

/*Route::get('/', function () {
    return view('welcome');
})->name('inicio');*/


Route::get('/', function () {
    return view('susan.index-2');
})->name('inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/administracao', 'AdministracaoController@index')->name('administracao');

//Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
//Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/redirect', 'SocialAuthFacebookController@redirect')->name('red');
Route::get('/callback', 'SocialAuthFacebookController@callback')->name('call');

Route::resource('permitidos','PermitidoController');
Route::resource('parametros','ParametroController');

Route::post('/calc', 'SocialAuthFacebookController@calc')->name('calc');
