<?php 
	  require_once('../../../controllers/db/connection.php');


	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	}else{
		$controller='oferta';
		$action='register';
	
	}
	require_once('../../layouts/ofertas/layout.php');	
 ?> 