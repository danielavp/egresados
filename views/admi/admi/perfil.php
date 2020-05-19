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
  <title>Mi perfil</title>

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
            <a class="enlace" href="?../admi/ir-registro.php=">Ver Perfil</a>
          </div>
          

        </div>
      </div>
    </div>
  </header>

  <!--         -->
  <!-- SECTION -->
  <!--         -->
  <body>

<div class="contenedor-registro-informacion contenedor-registro-capacitacion contenedor-generico">
  <form action="?controller=capacitacion&&action=save" method="POST" class="registro-informacion__formulario">

    <div class="formulario__encabezado">
      <h1 class="titulo"> Mi perfil </h1>
    </div>

    <div class="formalario__campos">
      <div class="linea-caja-texto pantalla-flexible">
        <label>Tema:</label>
        <input type="text" name="tema" class="caja-texto">
      </div>
      <div class="linea-caja-texto pantalla-flexible">
        <label>Ponente:</label>
        <input type="text" name="encargado" class="caja-texto">
      </div>

      <div class="linea-caja-dos-texto pantalla-flexible-between">
        <div class="linea-caja-texto pantalla-flexible">
          <label>Hora:</label>
          <input type="time" name="hora" class="caja-texto">
        </div>
        <div class="linea-caja-texto pantalla-flexible">
          <label>Lugar:</label>
          <input type="text" name="lugar" class="caja-texto">
        </div>
      </div>

      <div class="linea-caja-dos-texto pantalla-flexible-between">
        <div class="linea-caja-texto pantalla-flexible">
          <label>Inicio:</label>
          <input type="date" name="fecha" class="caja-texto">
        </div>
        <div class="linea-caja-texto pantalla-flexible">
          <label>Fin:</label>
          <input type="date" name="fecha_fin" class="caja-texto">
        </div>
      </div>

      <div class="linea-caja-texto pantalla-flexible">
        <label>Descripcion:</label>
        <input type="text-area" name="descripcion" class="caja-texto-area">
      </div>

      <div class="linea-caja-texto pantalla-flexible">
        <label>Usuario:</label>
        <input type="text" name="usuario" value="<?php echo ucfirst($_SESSION['id']); ?>"
        class="caja-texto">
      </div>

    
    </div>
  </form>
</div>

</body>
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


