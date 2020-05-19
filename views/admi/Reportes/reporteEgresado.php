<?php 

	 include 'pdf.php';
	 include 'conexion.php';
	
	 $conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);


	 $desdefecha     =  $_POST['desdefecha'];
	 $hastafecha     =  $_POST['hastafecha'];
	



	 		
	 		 $consulta = "SELECT nombre, apellido, codigo, telefono,estudios,anopromo
	 				 FROM usuarios
					  WHERE tipo=2 AND anopromo  
							 BETWEEN '$desdefecha'  AND '$hastafecha' ";


	$resultado= mysqli_query($conexion,$consulta);	
	
	//$resultado = $mysqli->query($query);
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage('portrait','LETTER');
	$pdf->SetFont('Arial','B',14);
	$pdf->SetY(25);
	$pdf->text(60,40,'REPORTE DE EGRESADOS',0,0,'C');

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',8);
	$pdf->SetY(60);
	$pdf->SetX(50);
	$pdf->Cell(25,6,'NOMBRES',1,0,'C',1);
	$pdf->Cell(25,6,'APELLIDOS',1,0,'C',1);
	$pdf->Cell(25,6,'CODIGO ',1,0,'C',1);
	$pdf->Cell(25,6,'TELEFONO',1,0,'C',1);
	$pdf->Cell(25,6,'ESTUDIOS',1,1,'C',1);
	$pdf->Cell(25,6,' GRADUADO',1,1,'C',1);
	//**cuantos datos valla a pedir**
	//$row = mysqli_fetch_array($resultado);
	//print_r($row);
	 //die();

	while($row = mysqli_fetch_array($resultado)){
		//print_r($row);
		$pdf->Cell(20);
		$pdf->setX(50);
		
		$pdf->Cell(25,6,$row['nombre'],1,0,'C');
		$pdf->Cell(25,6,$row['apellido'],1,0,'C');
		$pdf->Cell(25,6,$row['codigo'],1,0,'C');
		$pdf->Cell(25,6,$row['telefono'] ,1,0,'C');
		$pdf->Cell(25,6,$row['estudios'] ,1,1,'C');
		$pdf->Cell(25,6,$row['anopromo'] ,1,1,'C');
		
	}

	 $pdf->Output();  // con d se descarga automaticamente 

	// con f se guarda directamente en el disco pero se tiene q poner nombre
	  //$pdf->Output('F','REPORTE.PDF');



		
?>