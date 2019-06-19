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
Route::get('/iniciar', function () {
	if(Auth::user() )
		if( Auth::user()->tipo=='admin')
			return redirect('/encuestas');
		else
			return redirect('/respuestas');
	else
		return redirect('/login');
});
//Route::get('/encuestas', 'EncuestasController@index');
Route::resource('encuestas','EncuestasController')->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/respuestas', 'HomeController@index')->name('home');

Route::post('/respuestas', 'RespuestasController@store');
Route::get('/respuestas', 'RespuestasController@index');
Route::get('/respuestas/create', 'RespuestasController@create');
Route::post('/respuestas/show','RespuestasController@show');
Route::get('respuestas/{id}/result','RespuestasController@mostrarRespuestas');