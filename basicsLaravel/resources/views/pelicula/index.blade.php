<h1>{{ $titulo }}</h1>

<p>(Acción index del controlador peliculasController)</p>

@if (isset($pagina))
	<h3>La pagina es: {{ $pagina }}</h3> 
@endif

<a href="{{ url('detalle') }}">Ir a detalles</a>