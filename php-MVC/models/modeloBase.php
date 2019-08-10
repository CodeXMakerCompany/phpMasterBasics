<?php 	
	require_once 'config/conexion.php';
	class modeloBase{

		public $db;

		public function __construct() {
			$this->db = conexion::conectar();
		} 

		public function conseguirTodos($tabla) {
			$query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");

			return $query;
		}
		
	}