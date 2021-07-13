<?php

use App\Http\Controllers\Bandymas;
use App\Http\Controllers\ContactController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [Bandymas::class, 'testas']);

Route::get('/object', function () {
    return \App\Models\TodoItem::query()->first();
});
Route::get('/string', function () {
    return "Bandymas labas";
});
Route::get('/array', function () {
    return ["itemas" => ["kitas"=>"ats"]];
});

Route::get('/contacts', [ContactController::class, 'formView']);
Route::get('/contact/{contactMessage}', [ContactController::class, 'show']);
