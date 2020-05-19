
<body>  
<a href="ir-lista-clientes.php" class="btn btn-md btn-info">Volver</a>   
<CENTER> <H2 style="width: 400px; color: #806B39;"><b> CLIENTE </b> </H2> </CENTER> 
   
    <!-- fila principal  -->

   <!--  <div class="section">
     <a class="btn  btn-sm" href="ir-tabla.php" style="background-color: #610B0B; color: white; width: 20px;">historial  </a>
   </div> -->
<form action="?controller=clientes&&action=update" method="POST" class="from-registro"  >
    <div >
    
     <center><h3 style="color: black">DATOS PERSONALES</h3></center> <hr>

     <div class="form-group" style="padding: 20px; border: solid #806B39; border-radius: 1em ; width: 500px;  color: black; margin-left: 420px;">
      <!--  -->

      <input type="text" name="id_Cliente" style="display: none;" value="<?php echo $cliente->getId_cliente() ?>" >
      <!--  -->
      <p>Nombre: 
        <input type="text" name="nombre" disabled="" class="form-control "  value="<?php echo $cliente->getNombre() ?>">
      </p>
      <!--  -->

      <p>Telefono: 
        <input type="number" name="telefono" disabled=""  class="form-control" value="<?php echo $cliente->getTelefono() ?>">
      </p>
      <!--  -->

       <p>Direccion: 
        <input type="text" name="direccion"  disabled=""  class="form-control" value="<?php echo $cliente->getDireccion() ?>">
      </p>
      <!--  -->

      <p>N° Pagina: 
        <input type="number" name="n_pagina" disabled=""  class="form-control" value="<?php echo $cliente->getNpagina() ?>">
      </p>
      <!--  -->
      </div> 
    </div> 
    
  <hr>
 <center>

  <a href="../inicio.php" class="btn  " style="background-color:#806B39; color: white; ">Inicio</a>
   
  <a href="ir-lista-historial.php" class="btn" style="background-color:#806B39; color:white; ">Historial</a>
  <br>
<CENTER> <H2 style="width: 400px; color: #806B39;"><b> MEDIDAS</b>  </H2> </CENTER> 
  



  <div class="col-sm-4 form-group"  style="border-left: solid 3px #806B39; border-radius: 1em; margin-left: 50px; color: black;">
      <center><h3>torso</h3></center> <hr>
      <!--  -->
      <div class="col-md-4">
        <img src="../../../assets/imgs/medidas/braquioplastia.png" style="width: 100px; height: 190px;">
      </div>
      <!--  -->
      <div class="col-md-3">
        <input type="text" name="id_Medidas" style="display: none;" value="<?php echo $medida->getId_Medidas() ?>" >

          <p >B:
            <input type="text" name="b"  disabled=""   class="inp form-control"  value="<?php echo $medida->getB() ?>">
          </p>
          <!--  -->

          <p  >C:
            <input type="text" name="c"  disabled=""   class="inp form-control" value="<?php echo $medida->getC() ?>">
          </p>
          <!--  -->

          <p  >K:
            <input type="text" name="k" disabled=""    class="inp form-control" value="<?php echo $medida->getK() ?>">
          </p>
          <!--  -->

          <p  >TD:
            <input type="text" name="td"  disabled="" class="inp form-control" value="<?php echo $medida->getTd() ?>">
          </p>
          <!--  -->

          <p  >TE:
              <input type="text" name="te"   disabled=""  class="inp form-control" value="<?php echo $medida->getTe() ?>">
          </p>
          <!--  -->

          <p  >LP:
            <input type="text" name="lp"  disabled=""   class="inp form-control" value="<?php echo $medida->getLp() ?>">
          </p>
          <!--  -->

          <p>SP:
            <input type="text" name="sp"  disabled=""  class="inp form-control" value="<?php echo $medida->getSp() ?>">
          </p>
          <!--  -->
    </div>
  </div>

<!-- ------------------------------------------------------------------------------------- -->
  <div class="col-sm-4" style="color: black"  >
    <center><h3>Cadera</h3></center> <hr>
    <!--  -->
      <div class="col-md-4">
        <img src="../../../assets/imgs/medidas/aptitud.png" style="width: 100px; height: 190px;">
      </div>
     <!--  -->
     <div class="col-md-4">
      
    <p>AP:
        <input type="text" name="ap" disabled=""   class="inp form-control" value="<?php echo $medida->getAp() ?>">
      </p>
      <!--  -->

      <p>AE:
        <input type="text" name="ae" disabled=""    class="inp form-control" value="<?php echo $medida->getAe() ?>">
      </p>
      <!--  -->

      <p>H:
        <input type="text" name="h" disabled=""   class="inp form-control " value="<?php echo $medida->getH() ?>">
      </p>
      <!--  -->

      <p>IM:
        <input type="text" name="im" disabled=""   class="inp form-control" value="<?php echo $medida->getIm() ?>">
      </p>
      <!--  -->

      <p>AM:
        <input type="text" name="am"  disabled=""  class="inp form-control" value="<?php echo $medida->getAm() ?>">
      </p>
      <!--  -->

      <p>LM:
        <input type="text" name="lm"  disabled=""  class="inp form-control" value="<?php echo $medida->getLm() ?>">
      </p>
      <!--  -->

      <p>AP: 
        <input type="text" name="app" disabled=""   class="inp form-control" value="<?php echo $medida->getApp() ?>">
      </p>
      <!--  --> 

     </div>
  </div>
        

  <div class="col-sm-3" style="border-right: solid 3px #806B39;  border-radius: 1em; color: black"> 

    <center><h3>De alií para abajo</h3></center> <hr>

   <!--  -->
      <div class="col-md-4">
        <img src="../../../assets/imgs/medidas/medias.png" style="width: 100px; height: 190px;">
      </div>

      <div class="col-md-4">
     <!--  -->
      <p>LB:
        <input type="text" name="lb"  disabled=""  class="inp form-control" value="<?php echo $medida->getLb() ?>">
      </p>
      <!--  --> 

      <p>LP:
        <input type="text" name="lpp" disabled=""   class="inp form-control" value="<?php echo $medida->getlpp() ?>">
      </p>
      <!--  --> 

      <p>AR:
        <input type="text" name="ar" disabled=""   class="inp form-control" value="<?php echo $medida->getAr() ?>">
      </p>
      <!--  --> 

      <p>AB:
        <input type="text" name="ab" disabled=""   class="inp form-control" value="<?php echo $medida->getAb() ?>">
      </p>
      <!--  --> 

      <p>LF: 
        <input type="text" name="lf" disabled=""   class="inp form-control" value="<?php echo $medida->getLf() ?>">
      </p>
      <!--  --> 

      <p>ES:
        <input type="text" name="es"  disabled=""  class="inp form-control" value="<?php echo $medida->getEs() ?>">
      </p>
      <!--  -->

      <p>LSH:
        <input type="text" name="lsh"  disabled=""  class="inp form-control" value="<?php echo $medida->getLsh() ?>">
      </p>
      <!--  -->
      </div>       
    </div>


  
  




</form>


</body> 
