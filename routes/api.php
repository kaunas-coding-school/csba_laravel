<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/contact', [ContactController::class, 'store']);

Route::get('/contact/{contactMessage}', [ContactController::class, 'showApi']);

Route::get('/addresses', [AddressController::class, 'index']);
Route::post('/addresses', [AddressController::class, 'store']);
Route::get('/user-list', [UsersController::class, 'index']);
