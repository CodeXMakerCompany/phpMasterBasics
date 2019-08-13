<?php 
	require_once 'models/categoriaModel.php';
    require_once 'models/productosModel.php';

  	class categoriaController{
  		
  		public function index(){

  			$categoria = new categoriaModel();
  			$categorias = $categoria->mostrarCategorias();


  			require_once 'views/categoria/index.php';
  		}

      public function ver() {

         if (isset($_GET['id'])) {
            $id = $_GET['id'];

            //conseguir categoria  
            $categoria = new categoriaModel();
            $categoria->setId($id);
            $categoria = $categoria->mostrarUnaCategoria();

            //conseguir productos
            $producto = new productoModel();
            $producto->setCategoriaId($id);

            $productos = $producto->mostrarProdCategorias();  
            
          } 

        require_once 'views/categoria/ver.php';
      }

  		public function crear(){
  			require_once 'views/categoria/crear.php';
  		}

  		public function save() {

  			//funcion que verifica si el usuario es admin
  			utils::isAdmin();

  			if (isset($_POST) && isset($_POST['nombre'])) {
  				//Guardar la categoría en la bd
	  			$categoria = new categoriaModel();
	  			$categoria->setNombre($_POST['nombre']);

	  			$save = $categoria->save();
  			}
  			

  			header("Location:".base_url."categoria/index");

  		}
  		
  	}