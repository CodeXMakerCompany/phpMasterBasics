<?php 
	require_once 'models/productosModel.php';
	 class carritoController{

	 	public function index(){

	 		$carrito = $_SESSION['carrito'];
  			
  			require_once 'views/carrito/index.php';
  		}

  		public function add(){

  			if (isset($_GET['id'])) {
  				//obtengo la id del modelo con get
  				$producto_id = $_GET['id'];
  			}else{
  				header("Location:".base_url);
  			}

  			//si la sesion carrito existe
  			if (isset($_SESSION['carrito'])) {
  				
  				$counter = 0;
  				foreach ($_SESSION['carrito'] as $indice => $elemento) {
  					if ($elemento['id_producto'] == $producto_id) {
  						$_SESSION['carrito'][$indice]['unidades']++;
  						$counter++;
  					}
  				}


  			}
	  			if (!isset($counter) || $counter == 0) {
	  						//Conseguir producto
	  				$producto = new productoModel();
	  				$producto->setId($producto_id);
	  				$producto = $producto->mostrarUnProducto();

	  				//Añadir al carrito
	  				if (is_object($producto)) {
	  					$_SESSION['carrito'][] = array(
	  						"id_producto" => $producto->id,
	  						"precio" => $producto->precio,
	  						"unidades" => 1,
	  						"producto" =>$producto

	  					);
	  				}
	  			}		
	  				
	  		
  			
  			header("Location:".base_url."carrito/index");

  		}

  		public function remove(){

  		}

  		public function delete_all(){
  			unset($_SESSION['carrito']);
  			header("Location:".base_url."carrito/index");
  		}

	 }