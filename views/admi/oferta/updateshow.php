



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
  contenedor-registro-encuesta contenedor-generico">

  <form action="?controller=oferta&&action=update" method="POST" class="registro-informacion__formulario" >
    <div class="formulario__encabezado">
      <h1 class="titulo"> Actualizar Oferta de Empleo </h1>
    </div>

    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="text" name="empresa" value="<?php echo $oferta->getEmpresa();   ?>">
      <span class="input-icon">
        <i class="fas fa-chalkboard-teacher"></i>
      </span>
    </div>
    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="text" name="vacantes" value="<?php echo $oferta->getVacantes();   ?>">
      <span class="input-icon">
        <i class="fas fa-chalkboard-teacher"></i>
      </span>
    </div>
    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="text" name="cargo" value="<?php echo $oferta->getCargo();   ?>">
      <span class="input-icon">
        <i class="fas fa-chalkboard-teacher"></i>
      </span>
    </div>
    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="text" name="experiencia" value="<?php echo $oferta->getExperiencia();   ?>">
      <span class="input-icon">
        <i class="fas fa-chalkboard-teacher"></i>
      </span>
    </div>
    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="text" name="ciudad" value="<?php echo $oferta->getCiudad();   ?>">
      <span class="input-icon">
        <i class="fas fa-chalkboard-teacher"></i>
      </span>
    </div>

    <div class="formulario__campo-grupos formulario__campo-grupos-iconos">
      <input type="text-area" name="descripcion" value="<?php echo $oferta->getDescripcion();   ?>">
      <span class="input-icon">
        <i class="fas fa-link"></i>
      </span>
    </div>

    
    <input type="text" name="usuario" value="<?php echo ucfirst($_SESSION['id']); ?>" class="caja-texto" style="display: none">
    <input type="text" name="fecha" value= "<?php   echo date("d-m-Y ");  ?>"class="caja-texto" style="display: none">


    <div class="pantalla-flexible">

      <!--           -->
      <!-- REGISTRAR -->
      <!--           -->
      <input type="submit" name="registrar" value="Actualizar" class="boton registrar-encuesta-btn" >

      <!--        -->
      <!-- lOADER -->
      <!--        -->
      <div class="google-loader registrar-encuesta-loading" >
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </form>
</div>