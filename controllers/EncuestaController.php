<?php 

class EncuestaController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('../../../views/admi/encuesta/bienvenido.php');
	}

	function register(){
		require_once('../../../views/admi/encuesta/register.php');
	}

	function save(){

		// mt_srand (time());
		// //generamos un número aleatorio
		// $id = mt_rand(0,500000); 
	
		
		$encuesta= new Encuesta($_POST['id'],$_POST['tema'],$_POST['url'],$_POST['usuario'],$_POST['fecha']);
		//$usuario= new Usuarios($id,$_POST['nombre'],$_POST['apellido'],$_POST['cedula'],$_POST['codigo'],$_POST['direccion'],$_POST['telefono'],$_POST['añopromo'],$_POST['estudios'],$_POST['clave'],$_POST['tipo']);
		Encuesta::save($encuesta);
		echo '<script>
        alert("Registrado correctamente");
         location.href="ir-registro.php";
		</script>';
		
	}
	

	function show(){
		$listaEncuesta=Encuesta::all();

		require_once('../../../views/admi/encuesta/show.php');
	}
 
	function updateshow(){
		$id=$_GET['id'];
		$encuesta=Encuesta::searchById($id);
		require_once('../../../views/admi/encuesta/updateshow.php');
	}

	function update(){
		$encuesta = new Encuesta($_POST['id'],$_POST['tema'],$_POST['url'],$_POST['fecha']);
		encuesta::update($encuesta);
		$this->show();
	}
	function delete(){
		$id=$_GET['id'];
		Encuesta::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$Encuesta=Encuesta::searchById($id);
			$listaEncuesta[]=$encuesta;
			//var_dump($id);
			//die();
			require_once('../../../views/admi/encuesta/show.php');
		} else {
			$listaEncuesta=Encuesta::all();

			require_once('../../../views/admi/encuesta/show.php');
		}
		
		
	}

	function error(){
		require_once('../../../views/admi/encuesta/error.php');
	}

}

?>