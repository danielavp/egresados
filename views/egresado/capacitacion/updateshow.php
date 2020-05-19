
<body>   
<a href="ir-lista-clientes.php" class="btn btn-md btn-info">Volver</a> 
<CENTER> <H2 style="width: 400px; color: #806B39;"><b>EDITAR  CLIENTE </b> </H2> </CENTER> 
   
    
    
<form action="?controller=clientes&&action=update" method="POST" class="from-registro"  >
    <div style="color: black">
    
     <center><h3>DATOS PERSONALES</h3></center> <hr>

     <div class="form-group" style="padding: 20px; border: solid #806B39; border-radius: 1em ; width: 500px; margin-left: 420px;">

      <input type="text" name="id_Cliente" style="display: none;" value="<?php echo $cliente->getId_cliente() ?>" >
      <!--  -->
      <p>Nombre: 
        <input type="text" name="nombre" class="form-control " value="<?php echo $cliente->getNombre() ?>">
      </p>
      <!--  -->

      <p>Telefono: 
        <input type="number" name="telefono" class="form-control" value="<?php echo $cliente->getTelefono() ?>">
      </p>
      <!--  -->

       <p>Direccion: 
        <input type="text" name="direccion" class="form-control" value="<?php echo $cliente->getDireccion() ?>">
      </p>
      <!--  -->

      <p>N° Pagina: 
        <input type="number" name="n_pagina" class="form-control" value="<?php echo $cliente->getNpagina() ?>">
      </p>
      <!--  -->
      </div> 
    </div> 
    
  <hr>
 <center>
<input type="submit" name="Registrar" value="Guardar Cambios"  class="btn " style="background-color:#806B39; color: white;">
  <a href="../inicio.php" class="btn  " style="background-color:#806B39; color: white; ">Inicio</a>
  
  <br>
<CENTER> <H2 style="width: 400px; color: #806B39;"><b> EDITAR MEDIDAS</b>  </H2> </CENTER> 
  



  <div class="col-sm-4 form-group"  style="border-left: solid 3px #806B39; border-radius: 1em; margin-left: 50px; color: black">
      <center><h3>torso</h3></center> <hr>
      <!--  -->
      <div class="col-md-4">
        <img src="../../../assets/imgs/medidas/braquioplastia.png" style="width: 100px; height: 190px;">
      </div>
      <!--  -->
      <div class="col-md-3">
        <input type="text" name="id_Medidas" style="display: none;" value="<?php echo $medida->getId_Medidas() ?>" >

          <p >B:
            <input type="text" name="b"   class="inp form-control"  value="<?php echo $medida->getB() ?>">
          </p>
          <!--  -->

          <p  >C:
            <input type="text" name="c"   class="inp form-control" value="<?php echo $medida->getC() ?>">
          </p>
          <!--  -->

          <p  >K:
            <input type="text" name="k"   class="inp form-control" value="<?php echo $medida->getK() ?>">
          </p>
          <!--  -->

          <p  >TD:
            <input type="text" name="td" class="inp form-control" value="<?php echo $medida->getTd() ?>">
          </p>
          <!--  -->

          <p  >TE:
              <input type="text" name="te"   class="inp form-control" value="<?php echo $medida->getTe() ?>">
          </p>
          <!--  -->

          <p  >LP:
            <input type="text" name="lp"   class="inp form-control" value="<?php echo $medida->getLp() ?>">
          </p>
          <!--  -->

          <p>SP:
            <input type="text" name="sp"  class="inp form-control" value="<?php echo $medida->getSp() ?>">
          </p>
          <!--  -->
    </div>
  </div>

<!-- ------------------------------------------------------------------------------------- -->
  <div class="col-sm-4" style="color: black;" >
    <center><h3 >Cadera</h3></center> <hr>
    <!--  -->
      <div class="col-md-4">
        <img src="../../../assets/imgs/medidas/aptitud.png" style="width: 100px; height: 190px;">
      </div>
     <!--  -->
     <div class="col-md-4">
      
    <p>AP:
        <input type="text" name="ap"   class="inp form-control" value="<?php echo $medida->getAp() ?>">
      </p>
      <!--  -->

      <p>AE:
        <input type="text" name="ae"   class="inp form-control" value="<?php echo $medida->getAe() ?>">
      </p>
      <!--  -->

      <p>H:
        <input type="text" name="h"   class="inp form-control " value="<?php echo $medida->getH() ?>">
      </p>
      <!--  -->

      <p>IM:
        <input type="text" name="im"  class="inp form-control" value="<?php echo $medida->getIm() ?>">
      </p>
      <!--  -->

      <p>AM:
        <input type="text" name="am"  class="inp form-control" value="<?php echo $medida->getAm() ?>">
      </p>
      <!--  -->

      <p>LM:
        <input type="text" name="lm"  class="inp form-control" value="<?php echo $medida->getLm() ?>">
      </p>
      <!--  -->

      <p>AP: 
        <input type="text" name="app"  class="inp form-control" value="<?php echo $medida->getApp() ?>">
      </p>
      <!--  --> 

     </div>
  </div>
        

  <div class="col-sm-3" style="border-right: solid 3px #806B39;  border-radius: 1em; color: black; "> 

    <center><h3>De alií para abajo</h3></center> <hr>

   <!--  -->
      <div class="col-md-4">
        <img src="../../../assets/imgs/medidas/medias.png" style="width: 100px; height: 190px;">
      </div>

      <div class="col-md-4">
     <!--  -->
      <p>LB:
        <input type="text" name="lb"  class="inp form-control" value="<?php echo $medida->getLb() ?>">
      </p>
      <!--  --> 

      <p>LP:
        <input type="text" name="lpp"  class="inp form-control" value="<?php echo $medida->getlpp() ?>">
      </p>
      <!--  --> 

      <p>AR:
        <input type="text" name="ar"  class="inp form-control" value="<?php echo $medida->getAr() ?>">
      </p>
      <!--  --> 

      <p>AB:
        <input type="text" name="ab"  class="inp form-control" value="<?php echo $medida->getAb() ?>">
      </p>
      <!--  --> 

      <p>LF: 
        <input type="text" name="lf"  class="inp form-control" value="<?php echo $medida->getLf() ?>">
      </p>
      <!--  --> 

      <p>ES:
        <input type="text" name="es"  class="inp form-control" value="<?php echo $medida->getEs() ?>">
      </p>
      <!--  -->

      <p>LSH:
        <input type="text" name="lsh"  class="inp form-control" value="<?php echo $medida->getLsh() ?>">
      </p>
      <!--  -->
      </div>       
    </div>


  
  




</form>


</body> 
