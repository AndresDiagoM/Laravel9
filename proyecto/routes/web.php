<?php

use Illuminate\Http\Request;
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

/**
 * Route:get    | Consultar
 * Route:post   | Guardar
 * Route:delete | Eliminar
 * Route:put    | Actualizar
 */

Route::get('/', function () {
    //return view('welcome');
    return view('home');
})->name('home');  //se añade este nombre para construir los enlaces

Route::get('blog', function () {
    //return view('welcome');

    //Consulta a base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP',     'slug' => 'php'],
        ['id' => 2, 'title' => 'LARAVEL', 'slug' => 'laravel'],
        ['id' => 3, 'title' => 'JS',      'slug' => 'js'],
    ];

    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    //Consulta a base de datos
    $post = $slug;

    return view('post', ['post' => $post]);
})->name('post');

Route::get('buscar', function (Request $request) {
    //Consulta a base de datos
    return $request->all();
})->name('buscar');