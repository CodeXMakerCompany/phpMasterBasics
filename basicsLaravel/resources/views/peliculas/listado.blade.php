@include('includes.header')

<h1>{{ $title }}</h1>

<h2>{{ $lista[2] }}</h2>
<p>{{ date('y') }}</p>
	
	<!-- coemntario -->
	
@php
	//comentario
@endphp

{{-- Blade comentario --}}

{{-- Mostrar cuando existe --}}

<?= isset($user1) ? $user1 : 'No hay usuario 1';?> {{-- lo imprime --}}
<br>
{{ $user1 or 'no hay ningun dato' }} {{-- devuelve tru or false --}}

{{-- condicionales --}}

@if ($title && count($lista) >=3 )
	<h1>El titulo exite y es este : {{ $title }}</h1> 
@elseif($title)
	<h3>{{ date('y') }}</h3>	
@else

	<h1>El titulo no existe </h1>
@endif


{{-- Bucles --}}

@for ($i = 0; $i < 20; $i++)
	El numero es: {{ $i }} <br>
@endfor
<hr>
@php $contador = 1 @endphp
@while ($contador < 50 )
	@if ($contador % 2 == 0)
		numero par: {{ $contador }} <br>
	@endif

@php $contador++; @endphp	

@endwhile

<hr>

@foreach ($lista as $elemento)

	<p>{{ $elemento }}</p>

@endforeach

@include('includes.footer')