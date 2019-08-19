@if (isset($usuario) && is_object($usuario))
	<h1>Editar usuario</h1>
@else
	<h1>Crear nuevo usuario</h1>
@endif
<form action="{{ isset ($usuario) ? action('usuarioController@update') : action('usuarioController@save') }}" method="POST">
	
	{{ @csrf_field() }}

@if (isset($usuario) && is_object($usuario))

<input type="hidden" name="id" value="{{ $usuario->id }}">

@endif

 <div class="form-group">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" value="{{ isset($usuario->nombre) ? $usuario->nombre : 'Valor por defecto' }}">
</div>

 <div class="form-group">
	<label for="apellidos">Apellidos</label>
	<input type="text" name="apellidos" value="{{ isset($usuario->apellidos) ? $usuario->apellidos : 'Valor por defecto' }}">
</div>

<div class="form-group">
	<label for="email">Correo</label>
	<input type="email" name="email" value="{{ isset($usuario->email) ? $usuario->email : 'Valor por defecto' }}">
</div>

<div class="form-group">
	<label for="password">Contraseña</label>
	<input type="password" name="password" value="{{ isset($usuario->password) ? $usuario->password : 'Valor por defecto' }}">
</div>

 <div class="form-group">
	<label for="rol">Rol</label>
	<input type="text" name="rol" value="{{ isset($usuario->rol) ? $usuario->rol : 'Valor por defecto' }}">
</div>

<input type="submit" value="Enviar">

</form>

