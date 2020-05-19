<?php 

	 include 'pdf.php';
	 include 'conexion.php';


	 $conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);



	
	 $desdefecha     =  $_POST['desdefecha'];
	 $hastafecha     =  $_POST['hastafecha'];


	 		 $consulta = "SELECT id, ciudad,  empresa, descripcion, cargo, experiencia,vacantes,fecha
	 				 FROM oferta
	 					WHERE fecha  
	 						BETWEEN '$desdefecha'  AND '$hastafecha' ";



	$resultado= mysqli_query($conexion,$consulta);	
	
	//$resultado = $mysqli->query($query);
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage('portrait','LETTER');
	$pdf->SetFont('Arial','B',14);
	$pdf->SetY(25);
	$pdf->text(80,40,'REPORTE DE OFERTAS LABORALES PUBLICADAS',0,0,'C');

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',8);
	$pdf->SetY(60);
	$pdf->SetX(50);
	$pdf->Cell(25,6,'id',1,0,'C',1);
	$pdf->Cell(25,6,'ciudad',1,0,'C',1);
	$pdf->Cell(25,6,'empresa',1,0,'C',1);
	$pdf->Cell(25,6,'descripcion',1,1,'C',1);
	
	$pdf->Cell(25,6,'cargo',1,1,'C',1);
	$pdf->Cell(25,6,'experiencia',1,1,'C',1);
	$pdf->Cell(25,6,'vacantes',1,1,'C',1);
	$pdf->Cell(25,6,'fecha',1,1,'C',1);
	

	//**cuantos datos valla a pedir**
	//$row = mysqli_fetch_array($resultado);
	//print_r($row);
	 //die();

	while($row = mysqli_fetch_array($resultado)){
		//print_r($row);
		$pdf->Cell(20);
		$pdf->setX(50);
		
		$pdf->Cell(25,6,$row['id_pollo'],1,0,'C');
		$pdf->Cell(25,6,$row['peso'],1,0,'C');
		$pdf->Cell(25,6,$row['linea_genetica'],1,0,'C');
		$pdf->Cell(25,6,$row['causa'] ,1,1,'C');
		
	}

	 $pdf->Output();  // con d se descarga automaticamente 

	// con f se guarda directamente en el disco pero se tiene q poner nombre
	  //$pdf->Output('F','REPORTE.PDF');



		
?>