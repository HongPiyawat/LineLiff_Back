<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LineLoginController;

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

Route::middleware('api')->prefix('line')->namespace('App\Http\Controllers')->group(function () {
    Route::get('/login/{line_user_id}', [LineLoginController::class, 'show']);
    Route::post('/login', [LineLoginController::class, 'store']);
});
