<?php 
	require_once 'models/pedidoModel.php';
  	class pedidoController{
  		
  		public function hacer(){
  			

  			require_once 'views/pedido/hacer.php';

  		}


  		public function add(){

  				if (isset($_SESSION['identity'])) {
  					//validar los datos
  					$usuario_id = $_SESSION['identity']->id;
  					$provincia = isset($_POST['provinciaOdel']) ? $_POST['provinciaOdel'] : false;
  					$localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
  					$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
  					$stats = utils::statsCarrito();
  					$coste = $stats['total'];

  					if ($provincia && $localidad && $direccion) {

  						//guardar datos en la bd
	  					$pedido = new pedidoModel();
	  					$pedido->setUsuarioId($usuario_id);
	  					$pedido->setProvincia($provincia);
	  					$pedido->setLocalidad($localidad);
	  					$pedido->setDireccion($direccion);
	  					$pedido->setCoste($coste);

	  					//metodo save hace el insert y viene del modelo
	  					$save = $pedido->save();

	  					//guardar linea pedido
	  					$save_linea = $pedido->save_linea();

	  					if ($save && $save_linea) {
	  						$_SESSION['pedido'] = 'complete';
	  					}else{
	  						$_SESSION['pedido'] = 'failed';
	  					}

  					}else{
  						$_SESSION['pedido'] = 'failed';
  					}

  					header("Location:".base_url.'pedido/confirmado');
  					

  				}else{

  					//redirigir al index
  					header("Location:".base_url);
  				}
  		}

  		public function confirmado(){

  			if (isset($_SESSION['identity'])) {

  				$identity = $_SESSION['identity'];
  				$pedido = new pedidoModel();
  				$pedido->setUsuarioId($identity->id);
  				$pedido = $pedido->getOneByUser();

          $pedido_productos = new pedidoModel();
          $productos = $pedido_productos->getProductsByPedido($pedido->id);

  			}

  			require_once 'views/pedido/confirmado.php';
  		}

      public function mis_pedidos() {

        utils::isLoged();

        $usuario_id = $_SESSION['identity']->id;
        $pedido = new pedidoModel();
        $pedido->setUsuarioId($usuario_id);

        $pedidos = $pedido->getAllByUser();

       

        require_once 'views/pedido/mis_pedidos.php';

      }

      public function detalle() {
        utils::isLoged();

        if (isset($_GET['id'])) {
          $id = $_GET['id'];

          //sacar el pedido
          $pedido = new pedidoModel();
          $pedido->setId($id);
          $pedido = $pedido->mostrarUnPedido();

          //sacar los productos
          $pedido_productos = new pedidoModel();
          $productos = $pedido_productos->getProductsByPedido($id);


           require_once 'views/pedido/detalle.php';
        }else{
          header("Location:".base_url.'pedido/mis_pedidos');
        }
       

      }

      public function gestion () {

        utils::isAdmin();

        $gestion = true;

        $pedido = new pedidoModel();
        $pedidos = $pedido->mostrarPedidos();

        require_once 'views/pedido/mis_pedidos.php';
      }

      public function estado(){

        utils::isAdmin();

        if (isset($_POST['pedido_id']) && isset($_POST['estado'])) {
          

          //recolectar
          $id = $_POST['pedido_id'];
          $estado = $_POST['estado'];

          //upadate al pedido
          $pedido = new pedidoModel();
          $pedido->setId($id);
          $pedido->setEstado($estado);

          $pedido = $pedido->updateOne();

          

          header("Location:".base_url.'pedido/detalle&id='.$id);
        }else{

          header("Location:".base_url);
        }
        
      }
  		
  	}