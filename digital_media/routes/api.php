<?php

use App\Http\Controllers\MediaController;
use App\Models\Media;
use Illuminate\Httphpp\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/medias', [MediaController::class, 'index']);
Route::get('/medias/{id}', [MediaController::class, 'show']);


# Method POST
Route::post('/medias', [MediaController::class, 'store']);
Route::put('/medias/{id}', [MediaController::class, 'update']);
Route::delete('/medias/{id}', [MediaController::class, 'destroy']);
