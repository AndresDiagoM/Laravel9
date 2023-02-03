<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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

/**
 * Route:get    | Consultar
 * Route:post   | Guardar
 * Route:delete | Eliminar
 * Route:put    | Actualizar
*/

/*
Route::get('/', [PageController::class, 'home'] )->name('home');  //se añade este nombre para construir los enlaces

Route::get('blog', [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');

Route::get('buscar/{recibido}', [PageController::class, 'buscar'])->name('buscar');
*/

//Hay una mejor forma de escribir eso
Route::controller(PageController::class)->group(function(){

    Route::get('/',                  'home' )->name('home');
    Route::get('blog',               'blog')->name('blog');
    Route::get('blog/{post:slug}',        'post')->name('post');
    Route::get('buscar/{recibido}',  'buscar')->name('buscar');

});