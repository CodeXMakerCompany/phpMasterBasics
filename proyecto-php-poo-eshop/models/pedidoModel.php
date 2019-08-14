<?php 

	class pedidoModel{
	
		//privadas por que solo podremos acceder a ellas por metodos

		private $id;
		private $usuario_id;
		private $provincia;
		private $localidad;
		private $direccion;
		private $coste;
		private $estado;
		private $fecha;
		private $hora;
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
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    /**
     * @param mixed $usuario_id
     *
     * @return self
     */
    public function setUsuarioId($usuario_id)
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * @param mixed $provincia
     *
     * @return self
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $this->db->real_escape_string($provincia);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * @param mixed $localidad
     *
     * @return self
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $this->db->real_escape_string($localidad);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     *
     * @return self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $this->db->real_escape_string($direccion);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoste()
    {
        return $this->coste;
    }

    /**
     * @param mixed $coste
     *
     * @return self
     */
    public function setCoste($coste)
    {
        $this->coste = $coste;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     *
     * @return self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

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
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     *
     * @return self
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    public function mostrarPedidos() {
    	$productos = $this->db->query("SELECT * FROM pedidos ORDER BY id DESC");

    	return $productos;
    }

	public function mostrarUnPedido() {
        $producto = $this->db->query("SELECT * FROM pedidos WHERE id = {$this->getId()}");

        return $producto->fetch_object();
    }

    public function getAllByUser() {

        $sql = "SELECT p.* FROM pedidos p "
         ."WHERE p.usuario_id = {$this->getUsuarioId()} ORDER BY id DESC";

        $pedido = $this->db->query($sql);

        return $pedido;
    }

    public function getOneByUser() {

        $sql = "SELECT p.id, p.coste FROM pedidos p "
        //."INNER JOIN lineas_pedido lp ON lp.pedido_id = p.id "
         ."WHERE p.usuario_id = {$this->getUsuarioId()} ORDER BY id DESC LIMIT 1";


        $pedido = $this->db->query($sql);

        return $pedido->fetch_object();
    }

    public function getProductsByPedido($id) {
        /*$sql = "SELECT * FROM producto WHERE id IN " 
            . "(SELECT producto_id FROM lineas_pedido WHERE pedido_id ={$id})";*/

         $sql = "SELECT pr.*, lp.unidades FROM producto pr "
                . "INNER JOIN lineas_pedido lp ON pr.id = lp.producto_id "
                ."WHERE lp.pedido_id={$id}" ;

           $productos = $this->db->query($sql);

            return $productos; 
    }

    public function save() {

        $sql = "INSERT INTO pedidos VALUES(NULL, '{$this->getUsuarioId()}','{$this->getProvincia()}', '{$this->getLocalidad()}', '{$this->getDireccion()}', {$this->getCoste()}, 'confirm', CURDATE(), 'CURTIME()')";

        $save =  $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }

    public function save_linea(){

    	$sql = "SELECT LAST_INSERT_ID() as 'pedido';";

    	$query =  $this->db->query($sql);

    	$pedido_id = $query->fetch_object()->pedido;

    	foreach ($_SESSION['carrito'] as $elemento) {
    		$producto = $elemento['producto'];

    		$insert = "INSERT INTO lineas_pedido VALUES(NULL, {$pedido_id}, {$producto->id}, {$elemento['unidades']})";
    		$save = $this->db->query($insert);

    	}

    	$result = false;
        if ($save) {
            $result = true;
        }

        return $result;

        
    }

    public function updateOne(){
       $sql = "UPDATE pedidos SET estado='{$this->getEstado()}' "; 

        $sql .=" WHERE id={$this->getId()};";

        $save =  $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }

}