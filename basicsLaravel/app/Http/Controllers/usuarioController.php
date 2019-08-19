<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//controlador de tipo resource
class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

       $usuarios = DB::table('usuario')
                            ->orderBy('id','desc')
                            ->get();
      
       return view('usuarios.index',[
        'usuarios' => $usuarios
       ]);
    }

    public function details($id){
        $usuario = DB::table('usuario')->where('id', '=', $id)->first();

        return view('usuarios.details',[
            'usuario' => $usuario
        ]);
    }

    
    public function create()
    {
        return view('usuarios.create');
    }

    public function save(Request $request) {
        //guardar el registro
        $usuario = DB::table('usuario')->insert(array(
            'nombre' => $request->input('nombre'),
            'apellidos' => $request->input('apellidos'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'rol' => $request->input('rol')
        ));

        return redirect()->action('usuarioController@index')->with('status', 'Usuario creado con exito');
    }

    public function delete($id) {

       //borrar registro 
       $usuario = DB::table('usuario')->where('id', $id)->delete();

       return redirect()->action('usuarioController@index')->with('status', 'Usuario eliminado con exito');
    }

    public function edit($id)
    {
        //sacar el registro de la bd
        $usuario = DB::table('usuario')->where('id', $id)->first();
        //pasarle a la vista el objeto y rellenar el formulario
        
        return view('usuarios.create',[
            'usuario' => $usuario
        ]);
        
    }

    public function update(Request $request) {
        $id = $request->input('id');
        
        $usuario = DB::table('usuario')
                    ->where('id', $id)
                    ->update(array(
                            'nombre' => $request->input('nombre'),
                            'apellidos' => $request->input('apellidos'),
                            'email' => $request->input('email'),
                            'password' => $request->input('password'),
                            'rol' => $request->input('rol') 
                    ));

        return redirect()->action('usuarioController@index')->with('status', 'Usuario actualizado con exito');            
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
