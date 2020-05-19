

<style type="text/css">
  body {
    background-color: #E3E3E3;
  }

  .section {
    display: flex;
    justify-content: center;
    align-content: center;
    height: 100%;
    align-self: center;
  }

  .input-icon i{
    line-height: 3.2em !important;
  }
</style>

<!--                     -->
<!-- CONTENEDOR REGISTRO -->
<!--                     -->
<div class="contenedor-registro-informacion 
  contenedor-reunion-capacitacion contenedor-generico">

  <form action="?controller=reunion&&action=update" method="POST" class="registro-informacion__formulario" 
    >

    <div class="formulario__encabezado">
      <h1 class="titulo"> Actualizar Reuniones</h1>
    </div>

    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="date" name="fecha" title="Fecha" value="<?php echo $reunion->getFecha();   ?>">
      <span class="input-icon">
        <i class="fas fa-calendar-check"></i>
      </span>
    </div>

    <div class="formulario_campo_grupos_dos pantalla-flexible-between">

      <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
        <input type="time" name="hora" title="Hora" value="<?php echo $reunion->getHora();   ?>">
        <span class="input-icon">
          <i class="fas fa-clock"></i>
        </span>
      </div>

      <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
        <input type="text" name="lugar"  value="<?php echo $reunion->getLugar();   ?>">
        <span class="input-icon">
          <i class="fas fa-directions"></i>
        </span>
      </div>

    </div>

    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="area" name="descripcion" value="<?php echo $reunion->getDescripcion();   ?>">
      <span class="input-icon">
        <i class="fas fa-file-prescription"></i>
      </span>
    </div>

    <input type="text" name="usuario" value="<?php echo ucfirst($_SESSION['id']); ?>" class="caja-texto" style="display: none">


    <div class="pantalla-flexible">

      <!--           -->
      <!-- REGISTRAR -->
      <!--           -->
      <input type="submit" name="registrar" value="Registrar" class="boton registrar-reunion-btn" >

      <!--        -->
      <!-- lOADER -->
      <!--        -->
      <div class="google-loader registrar-reunion-loading" id="registrar-reunion-loading">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </form>
</div>

<script src="../../../assets/js/jquery.js"></script>