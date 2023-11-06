<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarLibro;
use Illuminate\Http\Request;
use Alert;


class bibliotecaController extends Controller
{
    public function mInicio(){
        return view('inicio');
    }

    public function mFormulario(){
        return view('formulario');
    }

    public function mRegistrar(validarLibro $req) {

    
        /* Alert::success('Registo', 'Tu registro ha sido exitoso')->persistent(true); */
        /* return redirect('/formulario')->with('confirmacion', 'Tu recuerdo llego al controlador'); */
        $titulo = $req->input('txtTitulo');
        $mensaje = "Libro '$titulo' registrado correctamente";
        return redirect('/formulario')->with('confirmacion', ['titulo' => 'Todo correcto', 'dato' => $mensaje]);

    }
    

}
