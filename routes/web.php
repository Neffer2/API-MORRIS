<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/metricas', [HomeController::class, 'index'])->middleware(['auth'])->name('metricas');  
Route::get('/ver_mas/{token}', [HomeController::class, 'allData'])->middleware(['auth'])->name('ver_mas');  

require __DIR__.'/auth.php';
