<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;






Route::get('/', [controladorVistas::class,'showWelcome']);

Route::get('principal', [controladorVistas::class,'showoprincipal'])->name('apodoprincipal');
Route::get('registro', [controladorVistas::class,'showregistro'])->name('apodoregistro');



Route::post('Guardarlibro', [controladorVistas::class,'procesarLibro'])->name('Guarli');









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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

