<?php
  $mysqli = new mysqli('localhost','root','','confecciones');
?>

<body>    
<CENTER> <H2 style="width: 400px; color: #806B39;"><b>REGISTRO DE CLIENTE </b> </H2> </CENTER> 
  
    <!-- fila principal  -->

   <!--  <div class="section">
  	 <a class="btn  btn-sm" href="ir-tabla.php" style="background-color: #610B0B; color: white; width: 20px;">historial  </a>
   </div> -->
<form action="?controller=clientes&&action=save" method="POST" class="from-registro"  >
   	<div >
    
     <center><h3 style="color: #806B39;">DATOS PERSONALES</h3></center> <hr>
     
     <div class="form-group" style="padding: 20px; border: solid#806B39; border-radius: 1em ; width: 500px; margin-left: 400px; color: black; margin-left: 420px;">
      <!--  -->
      <p>Nombre: 
        <input type="text" name="nombre" class="form-control ">
      </p>
      <!--  -->

      <p>Telefono: 
        <input type="number" name="telefono" class="form-control">
      </p>
      <!--  -->

       <p>Direccion: 
        <input type="text" name="direccion" class="form-control">
      </p>
      <!--  -->

      <p>N° Pagina: 
        <input type="number" name="n_pagina" class="form-control">
      </p>
      <!--  -->
      </div> 
    </div>

 		
  <hr>
 <center>
<input type="submit" name="Registrar" value="Registrar  Cliente"  class="btn " style="background-color:#806B39; color: white;">
  
  
  
</center>
  <br>
<CENTER> <H2 style="width: 400px; color: #806B39;"><b> REGISTRO DE MEDIDAS</b>  </H2> </CENTER> 
	



	<div class="col-sm-4 form-group"  style="border-left: solid 3px #806B39; border-radius: 1em; margin-left: 50px;  color: black;">
      <center><h3>torso</h3></center> <hr>
      <!--  -->
      <div class="col-md-4">
      	<img src="../../../assets/imgs/medidas/braquioplastia.png" style="width: 100px; height: 190px;">
      </div>
      <!--  -->
      <div class="col-md-3">
		      <p >B:
		        <input type="text" name="b"   class="inp form-control" >
		      </p>
		      <!--  -->

		      <p  >C:
		        <input type="text" name="c"   class="inp form-control" >
		      </p>
		      <!--  -->

		      <p  >K:
		        <input type="text" name="k"   class="inp form-control" >
		      </p>
		      <!--  -->

		      <p  >TD:
		        <input type="text" name="td" class="inp form-control" >
		      </p>
		      <!--  -->

		      <p  >TE:
		          <input type="text" name="te"   class="inp form-control" >
		      </p>
		      <!--  -->

		      <p  >LP:
		        <input type="text" name="lp"   class="inp form-control" >
		      </p>
		      <!--  -->

		      <p>SP:
		        <input type="text" name="sp"  class="inp form-control" >
		      </p>
		      <!--  -->
		</div>
  </div>

<!-- ------------------------------------------------------------------------------------- -->
  <div class="col-sm-4" style="color: black;">
  	<center><h3>Cadera</h3></center> <hr>
  	<!--  -->
  	  <div class="col-md-4">
      	<img src="../../../assets/imgs/medidas/aptitud.png" style="width: 100px; height: 190px;">
      </div>
     <!--  -->
     <div class="col-md-4">
     	
  	<p>AP:
        <input type="text" name="ap"   class="inp form-control" >
      </p>
      <!--  -->

      <p>AE:
        <input type="text" name="ae"   class="inp form-control" >
      </p>
      <!--  -->

      <p>H:
        <input type="text" name="h"   class="inp form-control " >
      </p>
      <!--  -->

      <p>IM:
        <input type="text" name="im"  class="inp form-control" >
      </p>
      <!--  -->

      <p>AM:
        <input type="text" name="am"  class="inp form-control" >
      </p>
      <!--  -->

      <p>LM:
        <input type="text" name="lm"  class="inp form-control" >
      </p>
      <!--  -->

      <p>AP: 
        <input type="text" name="app"  class="inp form-control" >
      </p>
      <!--  --> 

     </div>
  </div>
        

	<div class="col-sm-3" style="border-right: solid 3px #806B39;  border-radius: 1em; color: black;"> 

		<center><h3>De alií para abajo</h3></center> <hr>

	 <!--  -->
  	  <div class="col-md-4">
      	<img src="../../../assets/imgs/medidas/medias.png" style="width: 100px; height: 190px;">
      </div>

      <div class="col-md-4">
     <!--  -->
      <p>LB:
        <input type="text" name="lb"  class="inp form-control" >
      </p>
      <!--  --> 

      <p>LP:
        <input type="text" name="lpp"  class="inp form-control" >
      </p>
      <!--  --> 

      <p>AR:
        <input type="text" name="ar"  class="inp form-control" >
      </p>
      <!--  --> 

      <p>AB:
        <input type="text" name="ab"  class="inp form-control" >
      </p>
      <!--  --> 

      <p>LF: 
        <input type="text" name="lf"  class="inp form-control" >
      </p>
      <!--  --> 

      <p>ES:
        <input type="text" name="es"  class="inp form-control" >
      </p>
      <!--  -->

      <p>LSH:
        <input type="text" name="lsh"  class="inp form-control" >
      </p>
      <!--  -->
      </div>       
    </div>


  




</form>


</body>	

	

