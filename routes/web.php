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
Route::get('/idioma/{llengua}', array('as'=>'set-locale', 'uses'=>'LanguageController@setLocale'));
Route::get('/',  'HomeController@index');
Route::get('/nosaltres',  'HomeController@nosaltres');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/sitemap.xml/imatges', 'SitemapController@imatges');
Route::get('/sitemap.xml/projectes', 'SitemapController@projectes');
Auth::routes();
Route::group(['prefix'=>'administra','as'=>'administra.'], function(){
    Route::get('/', 'AdministraController@index')->middleware('auth');
    Route::get('/crearProjecte', 'AdministraController@novaProjecte')->middleware('auth');
    Route::post('/crearProjecte', 'AdministraController@guardarProjecte')->middleware('auth');
    Route::get('/llistatProjectes', 'AdministraController@getProjectes')->middleware('auth');
    Route::get('/nosaltres', 'AdministraController@getNosaltres')->middleware('auth');
    Route::post('/nosaltres', 'AdministraController@setNosaltres')->middleware('auth');
    Route::resource('/projecte', 'AdministraController')->middleware('auth');
    Route::get('/projecte/{id}/desactiva', 'AdministraController@desactiva')->middleware('auth');
    Route::delete('/projecte/imatge/{nomImatge}/eliminaimatge', 'AdministraController@eliminaImatge')->middleware('auth');
});


