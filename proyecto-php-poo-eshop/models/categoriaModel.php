<?php  

	class categoriaModel{

		private $id;
		private $nombre;
		private $db;

		public function __construct() {
		$this->db = conexion::conectar();
		}



	
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);

        return $this;
    }

   public function mostrarCategorias() {
   		$categorias = $this->db->query("SELECT * FROM categoria ORDER BY id DESC");
   		return $categorias;
   }

   public function mostrarUnaCategoria() {
            $categoria = $this->db->query("SELECT * FROM categoria WHERE id={$this->getId()}");
            return $categoria->fetch_object();
   }

   public function save(){
   		$sql = "INSERT INTO categoria VALUES(NULL, '{$this->getNombre()}')";
    	$save =  $this->db->query($sql);

    	$result = false;
    	if ($save) {
    		$result = true;
    	}

    	return $result;
   }
}