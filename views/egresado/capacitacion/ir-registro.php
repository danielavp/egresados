<?php 
	  require_once('../../../Controllers/db/connection.php');


	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	}else{
		$controller='clientes';
		$action='register';
	
	}
	require_once('../Layouts/cliente/layouts.php');	
 ?> 