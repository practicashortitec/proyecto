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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScraperController;
use App\Http\Controllers\UrlWebsitesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\WebTestController;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});




Route::get('/scraper',[ScraperController::class,'scraper'])->name('scraper');

Route::get('/scraperResultado', [ScraperController::class, 'pasaResultado'])->name('pasaResultado');

Route::get('/ejemploBlade', function () {
    return view('ejemplo');
});

Route::get('/pruebaInsertar',function(){
    return view('addUsuario');
});

Route::get('/pruebaInsertarWeb',function(){
    return view('addUrlWebsite');
});


Route::get('/insertUsuario', [UsuariosController::class,'insert'])->name('insert');
Route::get('/insertUrlWebsite', [UrlWebsitesController::class,'insert'])->name('insert');
Route::get('/insertWebTest',[WebTestController::class,'insert'])->name('insert');



Route::get('/home', function(){
    return view('inicio');
});


// Rutas Usuario
Route::middleware('auth:api')->get('/usuario',function(Request $request){
    return $request->user();
});
Route::get('/usuario',[UsuariosController::class,'index']);
Route::get('/usuario/{id}',[UsuariosController::class,'show']);
Route::post('/usuario',[UsuariosController::class,'store']);
Route::put('/usuario/{id}',[UsuariosController::class,'update']);
Route::delete('/usuario/{id}',[UsuariosController::class,'destroy']);


// Rutas Urls Websites
Route::middleware('auth:api')->get('/urls_websites',function(Request $request){
    return $request->user();
});
Route::get('/urls_websites',[UrlWebsitesController::class,'index']);
Route::get('/urls_websites/{id}',[UrlWebsitesController::class,'show']);
Route::post('/urls_websites',[UrlWebsitesController::class,'store']);
Route::put('/urls_websites/{id}',[UrlWebsitesController::class,'update']);
Route::delete('/urls_websites/{id}',[UrlWebsitesController::class,'destroy']);


// Rutas Web Test
Route::middleware('auth:api')->get('/web_test',function(Request $request){
    return $request->user();
});
Route::get('/web_test',[WebTestController::class,'index']);
Route::get('/web_test/{id}',[WebTestController::class,'show']);
Route::post('/web_test',[WebTestController::class,'store']);
Route::put('/web_test/{id}',[WebTestController::class,'update']);
Route::delete('/web_test/{id}',[WebTestController::class,'destroy']);

