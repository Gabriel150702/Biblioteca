<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorAutor;
use App\Http\Requests\validadorVistas;
use App\Http\Requests\validadorLibro;
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
        $ConsultaRec= DB::table('tb_autores')->get();
        
        return view('consulta',compact('ConsultaRec'));
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
        $consultaAutor=DB::select('SELECT idAutor,Nombre FROM tb_autores');

        return view('consulta')->with('Eliminar','abc');;
    }

    public function store(Request $request)
    {
        DB::table('tb_autores')->insert([
            "Nombre"=> $request->input('txtNom'),
            "fecha"=> Carbon::now(),
            "libros"=> $request->input('txtpubli'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()

        ]);
        return redirect('consulta')->with('Confirmacion','abc');
    }



    /*  DESPLIEGA LA VISTA DE CREAR LIBRO */
    public function createLib()
    {

        $consultaAutor=DB::select('SELECT idAutor,Nombre FROM tb_autores');
        return view('registro', compact('consultaAutor'));
    }
    

    /* GUARDAR LIBRO EN LA BASE DE DATOS */
    public function storeLibro(validadorLibro $request)
    {
        DB::table('tb_libros')->insert([
            "isbn"=> $request->input('txtISBN'),
            "idautor"=> $request->input('txtAutor'),
            "titulo"=> $request->input('txtTitulo'),
            "paginas"=> $request->input('txtPaginas'),
            "editorial"=> $request->input('txtEditorial'),
            "correo"=> $request->input('txtCorreo'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()


        ]);
        return redirect('libro/consultar')->with('Confirmacion','abc');
    }

    /* VISTA DE CONSULTAR LIBRO */

    public function consultaL()
    {
        $ConsultaLibros = DB::table('tb_libros')->get();
        
      
        return view('consultaLibro', compact('ConsultaLibros'));
    }


    public function showregistroAutor()
    {
   
        return view('registroAutores');
    }






    public function update(Request $request, $id)
    {
        DB::table('tb_autores')->where('idAutor',$id)->update([
            "Nombre"=> $request->input('txtNom'),
            "fecha"=> $request->input('txtFecha'),
            "libros"=> $request->input('txtpubli'),
            
            "updated_at"=> Carbon::now()


        ]);

        return redirect('consulta')->with('Actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_autores')->where('idAutor',$id)->delete();

        return redirect('consulta')->with('Eliminar','abc');
    }





    public function showLib($id)
    {
        $consultaAutor=DB::select('SELECT idAutor,Nombre FROM tb_autores');

        return view("registro",compact('consultaAutor'));
    }



   



}



