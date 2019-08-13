<?php 

	class conexion{
		public static function conectar(){
			$conexion = new mysqli('localhost', 'root', '', 'tienda_online_php');

			$conexion->query("SET NAMES 'utf8'");

			return $conexion;
		}
		
	}