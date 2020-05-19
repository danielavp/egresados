<?php 
	 require_once('../../../controllers/db/connection.php');

	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	}else{
		$controller='usuario';
		
		$action='info';
	}
	require_once('../../layouts/admi/layout.php');	
 ?>