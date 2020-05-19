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
<html lang="en">

<head>

  <!--        -->
  <!--  META  -->
  <!--        -->
  <meta charset="utf-8">
  <meta name="Login" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <!--         -->
  <!--  TITLE  -->
  <!--         -->
  <title>Admi | Encuestas</title>

  <!--     -->
  <!-- CSS -->
  <!--     -->
  <link rel="stylesheet" href="../../../assets/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

  <!--        -->
  <!-- HEADER -->
  <!--        -->
  <header class="menu capacitacion__menu">

    <!--           -->
    <!-- MENU ADMI -->
    <!--           -->
    <div class="pantalla-flexible-between menu__navegacion">

      <!--      -->
      <!-- LOGO -->
      <!--      -->
      <div class="pantalla-flexible menu__items-logo">
        <img src="../../../assets/img/UFPS/logoufps.jpg" title="Nuestra Universidad!" class="logo">
      </div>
      <a href="../inicio.php" style="color:white;">Inicio</a>
      <!--         -->
      <!-- ENLACES -->
      <!--         -->
      <div class="pantalla-flexible menu__items-enlaces" id="menu__superior">
        <a class="enlace cerrar-menu" onclick="cerrarMenuItems()">
          <span class="icono icono-cerrar" title="Cerrar Menú">
            <i class="fas fa-times-circle icono-awasome"></i>
          </span>
        </a>
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

        <a class="enlace icono-menu" onclick="abrirMenuItems()" id="abrir-menu-itmes">
          <span>
            <i class="fas fa-bars icono-awasome"></i>
          </span>
        </a>

        <a class="enlace" onclick="abiriMenuPerfil()">
          <span title="Usuario <?php echo $codigo; ?>">
            <i class="fas fa-user icono-awasome"></i>
          </span>
        </a>

        <a class="enlace" href="../../../controllers/cerrar-sesion.php">
          <span title="Cerrar Sesión <?php echo $codigo; ?>">
            <i class="fas fa-sign-out-alt icono-awasome"></i>
          </span>
        </a>

        <!--             -->
        <!-- MENÚ PERFIL -->
        <!--             -->
        <div class="menu__items__contenedor pantalla-flexible" id="menu__items__contenedor">
          <div>
            <a class="enlace">Ver Perfil</a>
          </div>
         

        </div>
      </div>
    </div>
  </header>

  <!--         -->
  <!-- SECTION -->
  <!--         -->
  <section class="section contenedor">
    <?php require_once('../../../routing.php'); ?>
  </section>

  <!--        -->
  <!-- FOOTER -->
  <!--        -->
  <footer class="pie-pagina pantalla-flexible-between contenedor">
    <div class="pie-pagina__informacion pantalla-flexible">
      <label><span>@2020</span> Todos los derechos reservados.</label>
    </div>
    <div class="pie-pagina__enlaces pantalla-flexible">
      <a class="enlace">Politicas y Privacidad</a>
      <a class="enlace">Terminos y condiciones</a>
    </div>
  </footer>

  <!--   -->
  <!--JS -->
  <!--   -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="../../../assets/js/main.js"></script>
  <script src="../../../assets/js/peticiones.js"></script>
</body>
</html>