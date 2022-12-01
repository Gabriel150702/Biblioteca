<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;
use App\Http\Requests\validadorAutor;

class controladorVistas extends Controller
{
    //

    
    public function showWelcome(){
        return view('welcome');


    }

    
    public function showoprincipal(){
        return view('principal');


    }

    
    public function showregistro(){
        return view('registro');


    }

    public function showregistroAutor(){
        return view('registroAutores');


    }


    public function procesarlibro(validadorLibro $req){
        return redirect('registro')
        
        ->with('Confirmacion','Al 100') ->with('txtTitulo',$req->txtTitulo);
        //return $req->all();
        //return $req->path();
        //return $req->url();
        //return $req->ip();

        
    }

    public function procesarAutor(validadorAutor $req){
        return redirect('registroAutores')
        
        ->with('Confirmacion','Al 100') ->with('txtTitulo',$req->txtTitulo);
        //return $req->all();
        //return $req->path();
        //return $req->url();
        //return $req->ip();

        
    }

}
