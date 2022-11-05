<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;

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
    public function procesarlibro(validadorLibro $req){
        return redirect('registro')->with('Confirmacion');
        //return $req->all();
        //return $req->path();
        //return $req->url();
        //return $req->ip();

        
    }



}
