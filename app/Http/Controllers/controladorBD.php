<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorAutor;
use App\Http\Requests\validadorVistas;
use DB;
use Carbon\Carbon;


class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consulta');
    }




    public function consultaL()
    {
        return view('consultaLibro');
    }


    public function edit($id)
    {
        return view('editarAutor');
    }


    public function editLi($id)
    {
        return view('editarLibro');
    }


    public function show($id)
    {
        return view('eliminarAutor');
    }


    public function eliminarLib($id)
    {
        return view('eliminarLibro');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consulta');
    }


    public function createLib()
    {
        return view('consultaLibro');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tb_autores')->insert([
            "Nombre"=> $request->input('txtNom'),
            "fecha"=> Carbon::now(),
            "libros"=> $request->input('txtpubli'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()


        ]);
        return redirect('autor/create')->with('confirmacion','abc');
    }


    public function storeLibro(Request $request)
    {
        DB::table('tb_autores')->insert([
            "isbn"=> $request->input('txtISBN'),
            "titulo"=> $request->input('txtTitulo'),
            "paginas"=> $request->input('txtPaginas'),
            "editorial"=> $request->input('txtEditorial'),
            "correo"=> $request->input('txtCorreo'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()


        ]);
        return redirect('libro/create')->with('confirmacion','abc');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
