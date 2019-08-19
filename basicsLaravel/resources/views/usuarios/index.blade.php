<h1>Listado de usuarios</h1>
<h3><a href="{{ action('usuarioController@create') }}">Crear nuevo usuario</a></h3>


@if (session('status'))
	<p style="background: green;">{{ session('status') }}</p>
@endif

<ul>
	@foreach ($usuarios as $usuario)
		<li> 
			<a href="{{ action('usuarioController@details', ['id' => $usuario->id]) }}">
			{{ $usuario->nombre }} </a> </li>

	@endforeach
</ul>