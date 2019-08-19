
	<!DOCTYPE html>
	<html>

	@extends('layouts.head')

	<body>
		<p>datos heredados de master.blade</p>
		@section('header')
			<h1>CABECERA DE LA WEB (master)</h1>
		@show

		<hr>
		
		<div class="container">
			<!-- Hereda los datos de pagina.blade y los transfiere aqui con yeld -->	
			@yield('content')

		</div>
		<hr>
		@section('footer')
			PIE DE PÁGINA (master)
		@show
	</body>
	</html>