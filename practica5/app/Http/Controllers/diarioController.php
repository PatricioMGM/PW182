<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diarioController extends Controller{

    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formulario');
    }
    
    public function metodoRecuerdos(){
        return view('recuerdos');
    }
    
    public function metodoGuardar(Request $req){

        $validated = $req->validate([
            'txtTitulo' => 'required|max:25',
            'txtRecuerdo' => 'required|min:5',
        ]);

        return redirect('/formulario')->with('confirmacion', 'Tu recuerdo llego al controlador');
        
        
    }
    
}



/*echo "<p>";

            echo $req->path();
            echo " - ";
            echo $req->method();
            echo " - ";
            echo $req->ip();
            echo " - ";
            echo $req->url();

        echo "</p>"; */


        // return $req->all();