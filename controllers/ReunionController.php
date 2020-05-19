<?php 

class ReunionController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('../../../views/admi/reunion/register.php');
	}

	function register(){
		require_once('../../../views/admi/reunion/register.php');
	}

	function save(){
		
		$reunion= new Reunion ();
		$reunion->setId($_POST['id']);
		$reunion->setId($_POST['fecha']);
		$reunion->setId($_POST['descripcion']);
		$reunion->setId($_POST['lugar']);
		
		$reunion->setId($_POST['hora']);
		$reunion->setId($_POST['usuario']);
		Reunion::save($reunion);

		 echo '<script>
        alert("Registrado correctamente");
         location.href="ir-lista-reunion.php";
        </script>';
    
    
	}

	/**
	 * Función que trae todas las reuniones.
	 */
	function show(){
		$listaReunion=Reunion::all();
		require_once('../../../views/admi/reunion/show.php');
	}

	function updateshow(){
		$id=$_GET['id'];
		$reunion=Reunion::searchById($id);
		require_once('../../../views/admi/reunion/updateshow.php');
	}

	function update(){
		$reunion= new reunion($_POST['id'],$_POST['fecha'],$_POST['descripcion'],$_POST['lugar'],$_POST['hora'],$_POST['usuario'] );
		Reunion::update($reunion);
		 echo '<script>
        alert("Registrado correctamente");
         location.href="ir-lista-reunion.php";
        </script>';
    
		 $this->show();
	}
	function delete(){
		$id=$_GET['id'];
		Reunion::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$reunion=Reunion::searchById($id);
			$listaReunion[]=$reunion;
			//var_dump($id);
			//die();
			require_once('../../../views/admi/reunion/show.php');
		} else {
			$listaReunion=Reunion::all();

			require_once('../../../views/admi/reunion/show.php');
		}
		
		
	}

	function error(){
		require_once('../../views/admi/reunion/error.php');
	}

}

?>