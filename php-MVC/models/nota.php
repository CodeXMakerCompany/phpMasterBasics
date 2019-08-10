<?php 	
	require_once 'modeloBase.php';

	class nota extends modeloBase{
		public $usuario_id;
		public $titulo;
		public $contenido;

		public function __construct() {
			parent::__construct();
		}

		public function getUsuario_id() {
			return $this->usuario_id;
		}
		public function getTitulo() {
			return $this->titulo;
		}
		public function getContenido() {
			return $this->contenido;
		}

		public function setUsuario_id($usuario_id) {
			$this->usuario_id = $usuario_id;
		}
		public function setTitulo($titulo) {
			$this->titulo = $titulo;
		}
		public function setContenido($contenido) {
			$this->contenido = $contenido;
		}

		public function guardar() {
			$sql = "INSERT INTO nota(usuario_id, titulo, contenido, fecha) VALUES ({$this->usuario_id}, '{$this->titulo}', '{$this->contenido}', CURDATE());";

			$guardado = $this->db->query($sql);

			return $guardado;
		}

	}