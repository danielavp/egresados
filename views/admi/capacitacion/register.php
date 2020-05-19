<?php
$mysqli = new mysqli('localhost', 'root', '', 'egresados');

include_once('../../../controllers/db/variables-sesion.php');
?>

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

</style>
<!--                     -->
<!-- CONTENEDOR REGISTRO -->
<!--                     -->
<div class="contenedor-registro-informacion 
  contenedor-registro-capacitacion contenedor-generico">
  <form action="?controller=capacitacion&&action=save" method="POST" class="registro-informacion__formulario" 
     >

    <div class="formulario__encabezado">
      <h1 class="titulo"> Registro Capacitaciones </h1>
    </div>

    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="text" name="tema" placeholder="Tema" required="">
      <span class="input-icon">
        <i class="fas fa-chalkboard-teacher"></i>
      </span>
    </div>

    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="text" name="encargado" placeholder="Encargado" required="">
      <span class="input-icon">
        <i class="fas fa-user-tie"></i>
      </span>
    </div>

    <div class="formulario_campo_grupos_dos pantalla-flexible-between">

      <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
        <input type="time" name="hora" title="Hora Inicio" required="">
        <span class="input-icon">
          <i class="fas fa-clock"></i>
        </span>
      </div>

      <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
        <input type="text" name="lugar" placeholder="Lugar" required="">
        <span class="input-icon">
          <i class="fas fa-directions"></i>
        </span>
      </div>

    </div>


    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="date" name="fecha" title="Fecha Incio"required="">
      <span class="input-icon">
        <i class="fas fa-calendar-check"></i>
      </span>
    </div>

    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="date" name="fecha_fin" title="Fecha Fin"required="">
      <span class="input-icon">
        <i class="far fa-calendar-times"></i>
      </span>
    </div>

    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="text-area" name="descripcion" placeholder="Descripción"required="">
      <span class="input-icon">
        <i class="fas fa-file-prescription"></i>
      </span>
    </div>


    <input type="text" name="usuario" value="<?php echo ucfirst($_SESSION['id']); ?>" class="caja-texto" style="display: none">
    <div class="pantalla-flexible">

<!--           -->
<!-- REGISTRAR -->
<!--           -->
<input type="submit" name="registrar" value="Registrar" class="boton registrar-encuesta-btn" >

<!--        -->
<!-- lOADER -->
<!--        -->
<div class="google-loader registrar-encuesta-loading" id="registrar-encuesta-loading">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>
</div>
</form>
</div>