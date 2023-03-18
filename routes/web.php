<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

/**
 * Rutas de la página
 */
Route::controller(PageController::class)->group(function(){

    Route::get('/',                  'home' )->name('home');
    //Route::get('blog',               'blog')->name('blog');
    Route::get('blog/{post:slug}',        'post')->name('post');

});

/**
 * Rutas de autenticación
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * Rutas de perfil
 */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * Rutas de administración
 */
Route::resource('posts', PostController::class)->except('show');
//Cuando veamos "php artisan route:list --path=posts", no aparece la ruta show

require __DIR__.'/auth.php';
