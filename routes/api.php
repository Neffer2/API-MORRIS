<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [ApiController::class, 'users']);
Route::post('/login', [ApiController::class, 'login']);

// MODULES
Route::post('/insertM1', [ApiController::class, 'insertM1']);
Route::post('/insertM2', [ApiController::class, 'insertM2']);
Route::post('/insertM3', [ApiController::class, 'insertM3']);
Route::post('/insertM4', [ApiController::class, 'insertM4']);
Route::post('/insertM5', [ApiController::class, 'insertM5']);
