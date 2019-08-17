@extends('layouts/master')


<!-- Pasa este titulo al yield de master.blade -->

@section('title', 'Master en PHP')


@section('header')
<!-- Concatena este texto al anterior con parent -->
@parent()
<h1>Bienvenido</h1>
@stop


<!-- con section se hereda este contenido a la seccion content de 
	master.blade.php -->

@section('content')
<h1>Contenido de la pagina generica</h1>
@stop

