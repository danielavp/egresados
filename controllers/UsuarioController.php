<?php 

class UsuarioController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('../../../views/admi/inicio.php');
	}

	

	function error(){
		require_once('../../../views/admi/error.php');
	}



	function save(){
	
		mt_srand (time());
		//generamos un número aleatorio
		$id = mt_rand(0,500000); 

         //if(isset($_POST['id'])|| isset($_POST['tema'])|| isset($_POST['fecha'])|| isset($_POST['fecha_fin'])|| isset($_POST['descripcion'])||  isset($_POST['lugar']) ||  isset($_POST['hora']) ||  isset($_POST['encargado']) ) {
			$usuario= new Usuarios($id,$_POST['nombre'],$_POST['apellido'],$_POST['cedula'],$_POST['codigo'],$_POST['direccion'],$_POST['telefono'],$_POST['anopromo'],$_POST['estudios'],$_POST['clave'],$_POST['tipo'],$_POST['foto']);
			// $capacitacion= new Capacitacion($id,$_POST['tema'],$_POST['fecha'],$_POST['fecha_fin'],$_POST['descripcion'],$_POST['lugar'],$_POST['hora'],$_POST['encargado'] ,$_POST['usuario'] );
			// $oferta= new oferta($_POST['id'],$_POST['ciudad'],$_POST['descripcion'],$_POST['experiencia'],$_POST['empresa'],$_POST['cargo'],$_POST['vacantes']);
			// $reunion= new Reunion ($_POST['id'],$_POST['fecha'],$_POST['descripcion'],$_POST['lugar'],$_POST['hora'],$_POST['encargado'] );
			// $encuesta= new Encuesta($_POST['id'],$_POST['tema'],$_POST['url']);

			

		Usuario::save($usuario);
		echo '<script>
        alert("Registrado correctamente");
         location.href="ir-registro.php";
        </script>';
	// }
	}



	function show(){
		$listaUsuario=Usuario::all();

		require_once('../../../views/admi/egresado/show.php');
	}

	function info(){
		$listaUsuario=Usuario::all();
		$_SESSION['codigo'];
		Usuario::toString($_SESSION['codigo']);
		require_once('../../../views/admi/admi/show.php');
	}

	function updateshow(){
		$id=$_GET['id'];
		$usuario=Usuario::searchById($id);
		require_once('../../../views/admi/updateshow.php');
	}

	function update(){
		$usuario= new Usuario($id,$_POST['nombre'],$_POST['apellido'],$_POST['cedula'],$_POST['codigo'],$_POST['direccion'],$_POST['telefono'],$_POST['anopromo'],$_POST['estudios'],$_POST['clave'],$_POST['tipo'],$_POST['foto']);
		Usuario::update($usuario);
		 echo '<script>
        alert("Registrado correctamente");
         location.href="ir-lista-admi.php";
        </script>';
    
		 $this->show();
	}
	function delete(){
		$id=$_GET['id'];
		Usuario::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$usuario=Usuario::searchById($id);
			$listaUsuario[]=$usuario;
			//var_dump($id);
			//die();
			require_once('../../../views/admi/egresado/show.php');
		} else {
			$listaUsuario=Usuario::all();

			require_once('../../../views/admi/egresado/show.php');
		}
		
		
	}



}

?>