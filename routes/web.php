<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BoardContoller;


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


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);


Route::resource('boards',BoardContoller::class);
// Route::get('/boards', [BoardContoller::class, 'index'])->name('boards.index');
// Route::get('/boards/{id}', [BoardContoller::class, 'show'])->name('boards.show');
// Route::post('/boards', [BoardContoller::class, 'store'])->name('boards.store');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
