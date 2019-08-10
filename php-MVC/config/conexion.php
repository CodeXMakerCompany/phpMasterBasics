<?php 
	
	class conexion{
		public static function conectar(){
			$conexion = new mysqli("localhost", "root", "", "blog");
			$conexion->query("SET NAMES 'utf-8'");

			return $conexion;
		}

	}