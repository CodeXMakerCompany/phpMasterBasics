
<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas/{pagina?}', 'peliculaController@index');

Route::get('/detalle/{year?}',[
			'middleware' => 'testYear',
			'uses' =>  'peliculaController@detalle',
			'as' => 'detalle.pelicula'
]);

//reedirigir
Route::get('/reedirigir', 'peliculaController@index');



Route::get('/formulario', 'peliculaController@formulario');
Route::post('/recibir', 'peliculaController@recibirData');


//Rutas usuario
Route::group(['prefix'=>'usuario'], function(){
	Route::get('/index','usuarioController@index');
	Route::get('/details/{id}','usuarioController@details');
	Route::get('/create', 'usuarioController@create');
	Route::post('/save', 'usuarioController@save');
	Route::get('/delete/{id}', 'usuarioController@delete');
	Route::get('/edit/{id}', 'usuarioController@edit');
	Route::post('update', 'usuarioController@update');
});




/*
	GET: Conseguir datos
	POST: Guardar datos
	PUT: Actualizar recursos
	DELETE: Borrar recursos

 */
/*
Route::get('/mostrar-fecha', function(){
	$titulo = "Esta es la fecha de hoy:";

	return view('mostrar_fecha', array(
		'titulo' => $titulo
	));
});

Route::get('/pelicula/{titulo}/{year?}', function($titulo = 'No hay una pelicula selecionada', $year ='2019'){

	return view('pelicula', array(
		'titulo' => $titulo,
		'year' => $year
	));

})->where(array(

	'titulo' => '[a-z]+',
	'year' => '[0-9]+'
));

Route::get('/listado-peliculas', function(){

	$title = 'Listado de elementos 2';
	$name = 'Samuel Vazquez Ruiz';
	$lista = array('uno', 'dos', 'tres');

	$user1 = "Hola soy el usuario 1";

	return view('peliculas.listado')
			->with('title',$title)
			->with('lista',$lista)
			->with('user1',$user1);
	
});

Route::get('pagina-generica', function(){

	return view('pagina');
});*/
