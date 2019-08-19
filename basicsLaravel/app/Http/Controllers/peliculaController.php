<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peliculaController extends Controller
{
    //Acciones
    #vistas del index de peliculas 
    public function index($pagina = 1) {

    	$titulo = "Listado de mis peliculas";

    	return view('pelicula.index', [
    				'titulo' => $titulo,
    				'pagina' => $pagina
    			]);
    }

    public function detalle($year = null){
    	
    	return view('pelicula.detalle');
    }

    public function reedirigir(){

    	return redirect()->route('detalle.pelicula');
    }

    public function formulario(){

        return view('pelicula.formulario');
    }

    public function recibirData(Request $request){

        $nombre = $request->input('nombre');
        $email = $request->input('email');

        return "El nombre es : $nombre y el email es: $email";
    }

}
