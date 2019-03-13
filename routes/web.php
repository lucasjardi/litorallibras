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

Route::get('/','HomeController@landingPage')->name('home');

Route::prefix('glossario')->group(function () {

	Route::get('/', 'HomeController@getGlossario');
    Route::get('/{glossario}', 'HomeController@getItemByCategoria');

});

Route::prefix('material')->group(function () {

	Route::get('/','HomeController@getMateriais');
    Route::get('/{material}', 'HomeController@getMaterialByCategoria');

});

Route::get('quem-somos', 'HomeController@getQuemSomos');

Route::prefix('user')->group(function()
{
	Route::get('/send','UsersController@sendView')->name('user.send');
	Route::post('/sendvideo','UsersController@sendvideo')->name('user.sendvideo');
});


Route::get('/video/{video}', 'HomeController@getVideo');

Auth::routes();


// ADMIN ROUTES

Route::prefix('admin')->group(function () {

	Route::get('/', 'AdminController@index')->name('admin');

	Route::get('/glossario', 'GlossarioController@glossario')->middleware('auth','checkifisadmin');
	Route::get('/glossario/formulario', 'GlossarioController@formularioGlossario')->middleware('auth','checkifisadmin');
	Route::get('/glossario/{glossario}/editar', 'GlossarioController@editarGlossario')->middleware('auth','checkifisadmin');
	Route::post('/glossario/store', 'GlossarioController@storeGlossario')->middleware('auth','checkifisadmin');
	Route::patch('/glossario/{glossario}', 'GlossarioController@updateGlossario')->middleware('auth','checkifisadmin');
	Route::delete('/glossario/{glossario}','GlossarioController@deleteGlossario')->middleware('auth','checkifisadmin');

	Route::get('/videos','VideosController@index')->middleware('auth','checkifisadmin');
	Route::get('/videos/formulario', 'VideosController@formulario')->middleware('auth','checkifisadmin');
	Route::post('/videos/store', 'VideosController@store')->middleware('auth','checkifisadmin');
	Route::get('/videos/{video}/editar', 'VideosController@editar')->middleware('auth','checkifisadmin');
	Route::patch('/videos/{video}', 'VideosController@update')->middleware('auth','checkifisadmin');
	Route::delete('/videos/{video}','VideosController@delete')->middleware('auth','checkifisadmin');

	Route::get('/material','MateriaisController@getMateriais')->middleware('auth','checkifisadmin');
	Route::get('/material/formulario', 'MateriaisController@formulario')->middleware('auth','checkifisadmin');
	Route::post('/material/store', 'MateriaisController@store')->middleware('auth','checkifisadmin');
	Route::get('/material/{material}/editar', 'MateriaisController@editar')->middleware('auth','checkifisadmin');
	Route::patch('/material/{material}', 'MateriaisController@update')->middleware('auth','checkifisadmin');
	Route::delete('/material/{material}','MateriaisController@delete')->middleware('auth','checkifisadmin');

	Route::get('/quemsomos','QuemSomosController@index')->middleware('auth','checkifisadmin');
	Route::post('/quemsomos', 'QuemSomosController@store')->middleware('auth','checkifisadmin');
	Route::patch('/quemsomos', 'QuemSomosController@update')->middleware('auth','checkifisadmin');

	Route::get('/litoral-libras','LitoralController@index')->middleware('auth','checkifisadmin');
	Route::post('/litoral-libras', 'LitoralController@store')->middleware('auth','checkifisadmin');
	Route::patch('/litoral-libras', 'LitoralController@update')->middleware('auth','checkifisadmin');

	Route::get('/sinais/{sinal}','SinaisController@getSinalVideo')->middleware('auth','checkifisadmin');
	Route::delete('/sinais/{sinal}','SinaisController@delete')->middleware('auth','checkifisadmin');

});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


