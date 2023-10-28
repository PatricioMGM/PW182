<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\validarLibro;


class bibliotecaController extends Controller
{
    public function mInicio(){
        return view('inicio');
    }

    public function mFormulario(){
        return view('formulario');
    }

    public function mRegistrar(Request $req) {
        $validated = $req->validate([
            'ISBN' => 'required|numeric|min:13',
            'paginas' => 'required|numeric',
            'email_editorial' => 'required|email',
        ]);
    
        return redirect('/formulario')->with('confirmacion', 'Tu recuerdo llego al controlador');
    }
    

}
