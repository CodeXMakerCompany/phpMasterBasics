<?php 
    require_once 'models/productosModel.php';
  	class productoController{
  		
  		public function index(){

        //productos destacados
        $producto = new productoModel();
        $productos = $producto->getRandom(6);

  			//renderizar vista
  			require_once 'views/productos/destacados.php';
  		}

  		public function gestion() {

        utils::isAdmin();

        $producto = new productoModel();
        $productos = $producto->mostrarProductos();

  			require_once 'views/productos/gestion.php';
  		}


      public function crear() {

         utils::isAdmin();
        require_once 'views/productos/crear.php';
      }

      public function save() {
        if (isset($_POST)) {
          
          //funcion ternaria comprueba la existencia de la variable post y si esxite asigna la variable a post y si no regresa falso.
          $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
          $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
          $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
          $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
          $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
          //$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;

          if ($nombre && $descripcion && $precio && $stock && $categoria) {
            $producto = new productoModel();
            $producto->setNombre($nombre);
            $producto->setDescripcion($descripcion);
            $producto->setPrecio($precio);
            $producto->setStock($stock);
            $producto->setCategoriaId($categoria);

         if (isset($_FILES['imagen'])) {
            
            //Guardar la imagen
            $file = $_FILES['imagen'];
            $filename = $file['name'];
            $mimetype = $file['type'];



            if ($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif') {
             
              if (!is_dir('uploads/images')){
                mkdir('uploads/images', 0777, true);
              }


              move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);

              $producto->setImagen($filename);
            }
              # code...
          }
            

            if (isset($_GET['id'])) {
              //editar entonces
              $id = $_GET['id'];
              $producto->setId($id);
              $save = $producto->edit();
            }else{
              //guardar
              $save = $producto->save();
            }

            

            if ($save) {
              $_SESSION['producto'] = "complete";


            }else{
              $_SESSION['producto'] = "failed";
            }
          }else{

            $_SESSION['producto'] = "failed";
          }
        }else{
          $_SESSION['producto'] = "failed";
        }

        header("Location:".base_url.'producto/gestion');
      }

      public function editar() {
        utils::isAdmin();
        if (isset($_GET['id'])) {
        
        $id = $_GET['id'];  
        $edit = true;
        $producto = new productoModel();
        $producto->setId($id);
        $pro = $producto->mostrarUnProducto();

        require_once 'views/productos/crear.php';

        }else{
          header('Location:'.base_url.'producto/gestion');
        }
      }

      public function eliminar() {
        utils::isAdmin();

        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $producto = new productoModel();
          $producto->setId($id);

          $delete = $producto->delete();

          if ($delete) {
            $_SESSION['delete'] == 'complete';
          }else{
            $_SESSION['delete'] == 'failed';
          }
        }else{
          $_SESSION['delete'] == 'failed';
        }

        header("Location:".base_url.'producto/gestion');
      }
  		
  	}