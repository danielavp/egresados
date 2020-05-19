 <?php 


$controllers=array(
	'usuario'=>['index','register','save','show','info','updateshow','update','delete','search'],
	'capacitacion'=>['index','register','save','show','updateshow','update','delete','search','error'],
	'encuesta'=>['index','register','save','show','updateshow','update','delete','search','error'],
	'oferta'=>['index','register','save','show','updateshow','updateshow2','update','delete','search','error'],
	'reunion'=>['index','register','save','show','updateshow','update','delete','search','error'],
	
);


echo "<script>
console.log('Controlador :  $controller');
</script>";

echo "<script>
console.log('Accion .$action');
</script>";


if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	} 
	else{
		echo '<script>
        alert("ERROR");
         location.href="ir-registro.php";
        </script>';
		call('capacitacion','error');
		call('oferta','error');
		call('encuesta','error');
		call('reunion','error');
		call('usuario','error');
		
	}		
}else{
	
	echo("error");
} 

function call($controller, $action){
	require_once('controllers/'.$controller.'Controller.php');

	switch ($controller) {
	
		case 'usuario':
		require_once('model/Usuario.php');
		require_once('model/Capacitacion.php');
		require_once('model/Oferta.php');
		require_once('model/Encuesta.php');
		require_once('model/Reunion.php');
		require_once('model/Tipo.php');
		
		$controller= new UsuarioController();
		break;
		
            
        case 'capacitacion':
		require_once('model/Capacitacion.php');
		$controller= new CapacitacionController();
		break;

		case 'oferta':
		require_once('model/Oferta.php');
		$controller= new OfertaController();
		break;
        
        case 'encuesta':
		require_once('model/Encuesta.php');
		$controller= new EncuestaController();
		break;
        
        
       
		case 'reunion':
		require_once('model/Reunion.php');
		$controller= new ReunionController();
		break;

        
		default:
				# code...
		break;

	}
	$controller->{$action}();
}

?>