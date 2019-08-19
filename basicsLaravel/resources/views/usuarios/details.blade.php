<h1>{{ $usuario->nombre }}</h1>

<p>
	{{ $usuario->email }}
</p>
<p>
	{{ $usuario->password}}
</p>
<p>
	{{ $usuario->id }}
</p>
<p>
	{{ $usuario->rol }}
</p>

<a href="{{ action('usuarioController@delete', ['id' => $usuario->id]) }}">Eliminar</a>

<a href="{{ action('usuarioController@edit', ['id' => $usuario->id]) }}">Actualizar</a>