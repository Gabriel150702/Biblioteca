<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorBD;






Route::get('/', [controladorVistas::class,'showWelcome']);

Route::get('principal', [controladorVistas::class,'showoprincipal'])->name('apodoprincipal');
/* Route::get('registro', [controladorVistas::class,'showregistro'])->name('apodoregistro');
 */

/* RUTA PARA MOSTRAR LA VISTA DE AGREGAR AUTOR */
 Route::get('registroAutores', [controladorVistas::class,'showregistroAutor'])->name('apodoregistroAu');




Route::post('Guardarlibro', [controladorVistas::class,'procesarLibro'])->name('Guarli');
Route::post('GuardarAutor', [controladorVistas::class,'procesarAutor'])->name('GuarAuto');





Route::get('consulta', [controladorBD::class,'index'])->name('consulta.index');

Route::get('editarAutor/{id}/edit', [controladorBD::class,'edit'])->name('editar.Aut');



Route::get('autor/create', [controladorBD::class,'create'])->name('autor.create');


Route::get('libro/create', [controladorBD::class,'createLib'])->name('libro.create');
Route::get('libro/consultar', [controladorBD::class,'consultaL'])->name('libro.consultar');
Route::post('libro/guardarLibro', [controladorBD::class,'storeLibro'])->name('libro.storeLibro');






//INSERTAR 

Route::post('autor', [controladorBD::class,'store'])->name('autor.store');

//ACTUALIZAR
Route::put('autor/{id}', [controladorBD::class,'update'])->name('autor.update');



// ELIMINAR
Route::delete('autor/{id}', [controladorBD::class,'destroy'])->name('autor.destroy');
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

