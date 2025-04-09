<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\AdministraController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/idioma/{llengua}', [LanguageController::class, 'setLocale'])->name('set-locale');
//Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'nouIndex']);
Route::get('/brandeador', [HomeController::class, 'quiSoc']);
//Route::get('/nosaltres', [HomeController::class, 'nosaltres']);
//Route::get('/pakage/{id}', [HomeController::class, 'imatgesPakets']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/sitemap.xml', [SitemapController::class, 'generate']);
//Route::get('/sitemap.xml/imatges', [SitemapController::class, 'imatges']);
//Route::get('/sitemap.xml/projectes', [SitemapController::class, 'projectes']);

Auth::routes(["register" => false]);

Route::group(['prefix' => 'administra', 'as' => 'administra.', 'middleware' => 'auth'], function () {
    Route::get('/', [AdministraController::class, 'index']);
    Route::get('/crearProjecte', [AdministraController::class, 'novaProjecte']);
    Route::post('/crearProjecte', [AdministraController::class, 'guardarProjecte']);
    Route::get('/llistatProjectes', [AdministraController::class, 'getProjectes']);
    Route::get('/nosaltres', [AdministraController::class, 'getNosaltres']);
    Route::post('/nosaltres', [AdministraController::class, 'setNosaltres']);
    Route::resource('/projecte', AdministraController::class);
    Route::get('/projecte/{id}/desactiva', [AdministraController::class, 'desactiva']);
    Route::delete('/projecte/imatge/{nomImatge}/eliminaimatge', [AdministraController::class, 'eliminaImatge']);
    Route::get('/pantalla1', [AdministraController::class, 'primeraDiapositiva']);
    Route::get('/pantalla2', [AdministraController::class, 'segonaDiapositiva']);
    Route::post('/pantalla/{id}', [AdministraController::class, 'imatgePantalla'])->name('imatge.pantalla');
    Route::delete('/pantalla/elimina/{id}/{filename}', [AdministraController::class, 'eliminaImatgePantalla'])
    ->name('imatge.elimina');
    Route::get('/pantalla3', [AdministraController::class, 'terceraDiapositiva']);
    Route::get('/pantalla4', [AdministraController::class, 'quartaDiapositiva']);
    Route::get('/pantalla5', [AdministraController::class, 'cinquenaDiapositiva']);
    Route::get('/pantalla6', [AdministraController::class, 'sisenaDiapositiva']);

});
