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

Route::get('/contacts', [ContactController::class, 'list']); // Gauna ir renderina sarasa
Route::get('/contact', [ContactController::class, 'formView']); // renderina tuscia forma naujam irasui kurti
Route::patch('/contact', [ContactController::class, 'store']); // Is formos gautus duomenis saugo i DB
Route::get('/contact/{contactMessage}', [ContactController::class, 'show'])->where('contactMessage','[0-9]+'); // atvaizduoja template viena irasa
Route::get('/contact/{contactMessage}/edit', [ContactController::class, 'edit']); // Renderina Edit forma su duomenimis
Route::patch('/contact', [ContactController::class, 'update']); // Atnaujina is redagavimo formos siunciamus duomenis pagal ID
Route::delete('/contact/{contactMessage}', [ContactController::class, 'delete']); // Salina Irasa is DB


Route::get('/contact/{name}', [ContactController::class, 'showByEmail'])->where('name','[a-zA-Z]+');

Route::get('/contact/{name}/test/{test}', [ContactController::class, 'duParametrai']);
