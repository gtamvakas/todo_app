<?php

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

Route::get('/', function () {
    return view('home');
})->middleware('guest')
    ->name('home');

Route::get('/projects', [\App\Http\Controllers\ProjectController::class, 'index'])
    ->middleware(['auth'])
    ->name('projects');

Route::get('/projects/create',[\App\Http\Controllers\ProjectController::class, 'create'])
    ->middleware('auth');

Route::post('/projects/create', [\App\Http\Controllers\ProjectController::class, 'store'])
    ->middleware('auth');

Route::get('/projects/{project:slug}',[\App\Http\Controllers\ProjectController::class, 'show'])
->middleware('auth');



require __DIR__.'/auth.php';
