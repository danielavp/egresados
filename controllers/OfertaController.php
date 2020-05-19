<?php 

class OfertaController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('../../../views/admi/oferta/register.php');
	}

	function register(){
		require_once('../../../views/admi/oferta/register.php');
	}

	function save(){



	
		$oferta= new Oferta($_POST['id'],$_POST['ciudad'],$_POST['descripcion'],$_POST['experiencia'],$_POST['empresa'],$_POST['cargo'],$_POST['vacantes'],$_POST['usuario'],$_POST['fecha']);
		Oferta::save($oferta);
		 echo '<script>
        alert("Registrado correctamente");
         location.href="ir-lista-ofertas.php";
        </script>';
	}

	function show(){
		$listaOferta=Oferta::all();

		require_once('../../../views/admi/oferta/show.php');
	}

	function updateshow(){
		$id=$_GET['id'];
		$oferta=Oferta::searchById($id);
		require_once('../../../views/admi/oferta/updateshow.php');
	}

	function update(){
		$oferta =  new oferta($_POST['id'],$_POST['ciudad'],$_POST['descripcion'],$_POST['experiencia'],$_POST['empresa'],$_POST['cargo'],$_POST['vacantes'],$_POST['usuario'],$_POST['fecha']);
		Oferta::update($oferta);
		 echo '<script>
        alert("Registrado correctamente");
         location.href="ir-lista-ofertas.php";
        </script>';
    
		 $this->show();
	}
	function delete(){
		$id=$_GET['id'];
		Oferta::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$oferta=Oferta::searchById($id);
			$listaOferta[]=$oferta;
			//var_dump($id);
			//die();
			require_once('../../../views/admi/oferta/show.php');
		} else {
			$listaGranja=Granja::all();

			require_once('../../../views/admi/oferta/show.php');
		}
		
		
	}

	function error(){
		require_once('../../../views/admi/oferta/error.php');
	}

}

?>