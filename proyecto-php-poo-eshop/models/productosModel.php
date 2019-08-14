<?php 

class productoModel{
	
	//privadas por que solo podremos acceder a ellas por metodos

	private $id;
	private $categoria_id;
	private $nombre;
	private $descripcion;
	private $precio;
	private $stock;
	private $oferta;
	private $fecha;
	private $imagen;
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
    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    /**
     * @param mixed $categoria_id
     *
     * @return self
     */
    public function setCategoriaId($categoria_id)
    {
        $this->categoria_id = $categoria_id;

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

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     *
     * @return self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $this->db->real_escape_string($descripcion);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     *
     * @return self
     */
    public function setPrecio($precio)
    {
        $this->precio = $this->db->real_escape_string($precio);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        $this->stock = $this->db->real_escape_string($stock);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * @param mixed $oferta
     *
     * @return self
     */
    public function setOferta($oferta)
    {
        $this->oferta = $this->db->real_escape_string($oferta);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     *
     * @return self
     */
    public function setFecha($fecha)
    {
        $this->fecha = $this->db->real_escape_string($fecha);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     *
     * @return self
     */
    public function setImagen($imagen)
    {
        $this->imagen = $this->db->real_escape_string($imagen);

        return $this;
    }

    
    public function mostrarProductos() {
    	$productos = $this->db->query("SELECT * FROM producto ORDER BY id DESC");

    	return $productos;
    }

    public function mostrarProdCategorias() {

        $sql= "SELECT p.*, c.nombre AS 'catNombre' FROM producto p "
                . "INNER JOIN categoria c ON c.id = p.categoria_id "
                . "WHERE p.categoria_id={$this->getCategoriaId()} "
                . "ORDER BY id DESC";    
        $productos = $this->db->query($sql);

    
        return $productos;
    }

    public function mostrarUnProducto() {
        $producto = $this->db->query("SELECT * FROM producto WHERE id = {$this->getId()}");

        return $producto->fetch_object();
    }

    public function getRandom($limit) {
        $productos = $this->db->query("SELECT * FROM producto ORDER BY RAND() LIMIT $limit");

        return $productos;
    }

    public function save() {

        $sql = "INSERT INTO producto VALUES(NULL, '{$this->getCategoriaId()}','{$this->getNombre()}', '{$this->getDescripcion()}', '{$this->getPrecio()}', {$this->getStock()}, null, CURDATE(), '{$this->getImagen()}')";
        $save =  $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }

    public function edit() {

        $sql = "UPDATE `producto` SET `categoria_id`='{$this->getCategoriaId()}',`nombre`='{$this->getNombre()}',`descripcion`='{$this->getDescripcion()}',`precio`={$this->getPrecio()},`stock`={$this->getStock()}"; 

        if ($this->getImagen() != null) {
            $sql .=", imagen = '{$this->getImagen()}'";
        }
        
        $sql .=" WHERE id={$this->id};";

       
        $save =  $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }

        public function delete() {
        $sql = "DELETE FROM producto WHERE id={$this->id}";
        $delte = $this->db->query($sql);

        $result = false;
        if ($delete) {
            $result = true;
        }

        return $result;
    }
}