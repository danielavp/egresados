<?php 

class CapacitacionController
{
	
	function __construct()
	{
		
	}
 
	function index(){
		require_once('../../../views/admi/capacitacion/register.php');
	}

	function register(){
		require_once('../../../views/admi/capacitacion/register.php');
	}


	/**
	 * Función que guarda una capaitación.
	 */
	function save(){
		$capacitacion = new  Capacitacion($_POST['id'],$_POST['tema'],$_POST['fecha'],$_POST['fecha_fin'],$_POST['descripcion'],$_POST['lugar'],$_POST['hora'],$_POST['encargado'],$_POST['usuario']  );
		
		Capacitacion::save($capacitacion);
		echo '<script>
        alert("Registrado correctamente");
         location.href="ir-lista-capacitaciones.php";
        </script>';
	// }
			 
	}

	function show(){
		$listaCapacitacion=Capacitacion::all();

		require_once('../../../views/admi/capacitacion/show.php');
	}

	function updateshow(){
		$id=$_GET['id'];
		$capacitacion=Capacitacion::searchById($id);
		require_once('../../../views/admi/capacitacion/updateshow.php');
	}

	function update(){
		if(isset($_POST['id'])) {

		$capacitacion = new  Capacitacion($_POST['id'],$_POST['tema'],$_POST['fecha'],$_POST['fecha_fin'],$_POST['descripcion'],$_POST['lugar'],$_POST['hora'],$_POST['encargado'],$_POST['usuario']  );
		//$usuario= new Usuarios($id,$_POST['nombre'],$_POST['apellido'],$_POST['cedula'],$_POST['codigo'],$_POST['direccion'],$_POST['telefono'],$_POST['añopromo'],$_POST['estudios'],$_POST['clave'],$_POST['tipo']);
		Capacitacion::update($capacitacion);
		echo '<script>
        alert("Registrado correctamente");
         location.href="ir-lista-capacitaciones.php";
        </script>';
    
		$this->show();
	}
	}
	function delete(){
		$id=$_GET['id'];
		Capacitacion::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$capacitacion=Capacitacion::searchById($id);
			$listaCapacitacion[]=$capacitacion;
			//var_dump($id);
			//die();
			require_once('../../../views/admi/capacitacion/show.php');
		} else {
			$listaCapacitacion=Capacitacion::all();

			require_once('../../../views/admi/capacitacion/show.php');
		}
		
		
	}

	function error(){
		require_once('../../../views/admi/Capacitacion/error.php');
	}

}

?>