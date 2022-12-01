<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorBD;






Route::get('/', [controladorVistas::class,'showWelcome']);

Route::get('principal', [controladorVistas::class,'showoprincipal'])->name('apodoprincipal');
Route::get('registro', [controladorVistas::class,'showregistro'])->name('apodoregistro');
Route::get('registroAutores', [controladorVistas::class,'showregistroAutor'])->name('apodoregistroAu');




Route::post('Guardarlibro', [controladorVistas::class,'procesarLibro'])->name('Guarli');
Route::post('GuardarAutor', [controladorVistas::class,'procesarAutor'])->name('GuarAuto');





Route::get('consulta', [controladorBD::class,'index'])->name('consulta.index');
Route::get('consultaLib', [controladorBD::class,'consultaL'])->name('consultaLi.consultaL');
Route::get('editarAutor/{id}/edit', [controladorBD::class,'edit'])->name('editar.Aut');

Route::get('editarLibro/{id}/editLi', [controladorBD::class,'editLi'])->name('editar.Libr');

Route::get('eliminarAutor/{id}/show', [controladorBD::class,'show'])->name('eliminarAutor.show');
Route::get('eliminarLibro/{id}/eliminarLib', [controladorBD::class,'eliminarLib'])->name('eliminarLibro.eliminarLib');



Route::get('autor/create', [controladorBD::class,'create'])->name('autor.create');

Route::post('autor', [controladorBD::class,'store'])->name('autor.store');
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

