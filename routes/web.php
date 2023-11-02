<?php

use App\Http\Controllers\Teste\Teste01Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(Teste01Controller::class)->group(function () {
    Route::get('/about', "Fabout")->name('about.pagina');
    Route::get('/contactos', "Fcontactos")->name('contactos.pagina');
});
