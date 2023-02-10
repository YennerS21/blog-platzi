<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Las rutas del proyecto para ver el blog y administrarlo
| 
| 
*/

/**
 * Estas vistas son publicas, estan agrupadas y tienen un controlador
 * con diferentes metodos para ver el blog. 
 */
Route::controller(PageController::class)->group(function ()
{
    Route::get('/', 'home')->name('home');
    Route::get('/blog/{post:slug}', 'post')->name('post');
});

/**
 * Esta ruta esta configurada para redirigir hacia la ruta posts
 * esta protegida para que solo accedan un usuario registrado. 
 */
Route::redirect('dashboard', 'posts')->middleware(['auth'])->name('dashboard');

/**
 * La ruta para los posts con sus metodos correspondientes y excepciones, 
 * acceso solo a usuarios registrados  
 */
Route::resource('posts', PostController::class)->middleware(['auth'])->except('show');

require __DIR__.'/auth.php';
