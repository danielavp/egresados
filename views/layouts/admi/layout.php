<?php

include_once('../../../controllers/db/conexion.php');

session_start();


//Restringir acceso sin haberse logueado
if (isset($_SESSION['codigo'])) {
} else {

  echo '<SCRIPT LANGUAJE="javascript">
          location.href = "../../index.php";
</script>';
  exit;
}
include_once('../../../controllers/db/variables-sesion.php');
?>




<!DOCTYPE html>
<html>

<head>
  <title>Encuestas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="../../../assets/css/main.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

  <div class="main-encuesta contenedor">

    <!--           -->
    <!-- MENU ADMI -->
    <!--           -->
    <div class="menu">
      <div class="pantalla-flexible-between menu__navegacion">

        <!--      -->
        <!-- LOGO -->
        <!--      -->
        <div class="pantalla-flexible menu__items-logo">
          <img src="../../../assets/img/UFPS/logoufps.jpg" title="Nuestra Universidad!" class="logo">
        </div>

        <!--         -->
        <!-- ENLACES -->
        <!--         -->
        <div class="pantalla-flexible-between menu__items-enlaces" id="menu__superior">
          <a class="enlace cerrar-menu" onclick="abrirMenu()">
            <img class="icono icono-cerrar" src="../../../assets/img/close.png" title="Cerrar Menú"></a>
          <a class="enlace" title="Ver Capacitaciones" href="../capacitacion/ir-lista-capacitaciones.php">Capacitaciones</a>
          <a class="enlace" title="Ver Encuestas" href="../encuesta/ir-lista-encuenta.php">Encuestas</a>
          <a class="enlace" title="Ver Ofertas Trabajos" href="../oferta/ir-lista-ofertas.php">Ofertas Empleo</a>
          <a class="enlace" title="Ver Egresados" href="../egresado/ir-lista-egresado.php">Egresados</a>
          <a class="enlace" title="Ver Reuniones" href="../reunion/ir-lista-reunion.php">Reuniones</a>
        </div>

        <!--        -->
        <!-- ICONOS -->
        <!--        -->
        <div class="pantalla-flexible-between menu__items-iconos">
          <a class="enlace icono-menu" onclick="abrirMenu()">
            <img class="icono" src="../../../assets/img/menu.png">
          </a>

          <a class="enlace">
            <img class="icono" src="../../../assets/img/user.png" title="Usuario <?php echo $codigo; ?>">
          </a>

          <a class="enlace" href="../../../controllers/cerrar-sesion.php">
            <img class="icono" src="../../../assets/img/session.png" title="Cerrar Sesión <?php echo $codigo; ?>">
          </a>
        </div>
      </div>
    </div>

    <div class="section">
      <?php require_once('../../../routing.php'); ?>
    </div>

  </div>
  <div class="pie-pagina pantalla-flexible-between">
    <div class="pie-pagina__informacion pantalla-flexible">
      <label><span>@2020</span> Todos los derechos reservados.</label>
    </div>
    <div class="pie-pagina__enlaces pantalla-flexible">
      <a class="enlace">Politicas y Privacidad</a>
      <a class="enlace">Terminos y condiciones</a>
    </div>
  </div>

  <!--JS -->
  <script src="../../../assets/js/main.js"></script>
</body>

</html>