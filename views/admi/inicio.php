<?php
include_once('../../controllers/db/conexion.php');
session_start();

//Restringir acceso sin haberse logueado
if (isset($_SESSION['codigo'])) {
} else {

  echo '<SCRIPT LANGUAJE="javascript">
          location.href = "../../index.php";
</script>';
  exit;
}
include_once('../../controllers/db/variables-sesion.php');
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
  <title>Inicio | Admi</title>

  <!--     -->
  <!-- CSS -->
  <!--     -->
  <link rel="stylesheet" href="../../assets/css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>


  <!--           -->
  <!-- MENU ADMI -->
  <!--           -->
  <header class="menu inicio__menu">

    <div class="pantalla-flexible-between menu__navegacion">

      <!--      -->
      <!-- LOGO -->
      <!--      -->
      <div class="pantalla-flexible menu__items-logo">
        <img src="../../assets/img/UFPS/logoufps.jpg" title="Nuestra Universidad!" class="logo">
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
        <a class="enlace" title="Ver Capacitaciones" href="capacitacion/ir-lista-capacitaciones.php">Capacitaciones</a>
        <a class="enlace" title="Ver Encuestas" href="encuesta/ir-lista-encuenta.php">Encuestas</a>
        <a class="enlace" title="Ver Ofertas Trabajos" href="oferta/ir-lista-ofertas.php">Ofertas Empleo</a>
        <a class="enlace" title="Ver Egresados" href="egresado/ir-lista-egresado.php">Egresados</a>
        <a class="enlace" title="Ver Reuniones" href="reunion/ir-lista-reunion.php">Reuniones</a>
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

        <a class="enlace" href="../../controllers/cerrar-sesion.php">
          <span title="Cerrar Sesión <?php echo $codigo; ?>">
            <i class="fas fa-sign-out-alt icono-awasome"></i>
          </span>
        </a>

        <!--             -->
        <!-- MENÚ PERFIL -->
        <!--             -->
        <div class="menu__items__contenedor pantalla-flexible" id="menu__items__contenedor">
        <!--  -->
          <div>
            <a class="enlace" href="admi/perfil.php" >Ver Perfil</a>
          </div>
          

        </div>
      </div>
    </div>
  </header>
  <article>
  
  <div style=" background: red; margin-top: 100px; height: 160px; width:400px; margin-left:905px;" >
  <h1>Agrega Egresados</h1>
  <form  method="post"  target="_blank">

  <p  style=" color: white;"> 

  Sube el archivo:

  <input type="file" name="ArchivoSubido" accept="excel, .xlsx, .xlsb, .xls">

  <input type="submit" value="Enviar datos">

  </p>

  </form>
  </div>
                             
  <div id="modal-reguistroU" class="w3-modal">
           <div class="w3-modal-content w3-animate-top w3-card-6">
              <header class="w3-container headerModal"> 
              
                <h2 class="modal-title text-center all-tittles">Reportes</h2>
              </header>
             <div>
                <table border="4" >
                    
                        <td style="padding: 3%">
                          <form action="Reportes/reporteEgresado.php"  method="POST">
                            <center>   <p> <b>Reporte de Egresados</b></p> </center>   
                           <input type="date" name="desdefecha" placeholder="desde fecha" required=""
                                                        style="height: 53px; ">
                            <input type="date" name="hastafecha" placeholder="hasta fecha" required=""  
                                                        style="height: 53px; ">
                            <input type="submit" name="" value="Generar Reporte"  > 
                         </form>
                        </td>

                    
                    
                        <td style="padding: 3%">
                           <form action="Reportes/reporteEncuesta.php"  method="POST">
                              <center>   <p><b>Reporte de Encuestas Publicadas</b></p> </center>  
                              <input type="date" name="desdefecha" placeholder="desde fecha"  style="height: 53px; " required="">
                              <input type="date" name="hastafecha" placeholder="hasta fecha"  
                                                                    style="height: 53px;  width: 166px; " required="">
                              <input type="submit" name="" value="Generar Reporte" style="width:  140px; ">                             
                            </form>
                        </td>

                        <tr>
                            <td style="padding: 3%">
                               <form action="Reportes/reporteOfertas.php"  method="POST"> 
                                  <center><p><b>Reporte de Ofertas Laborales Publicadas</b></p></center>    
                                 
                                   <input type="date" name="desdefecha" placeholder="desde fecha" style="height: 53px; " required="">
                                   <input type="date" name="hastafecha" placeholder="hasta fecha" style="height: 53px; " required="">
                                   <input type="submit" name="" value="Generar Reporte">
                                </form>
                            </td>

                           
                        </tr>
                        <tr>
                            <td style="padding: 3%">
                               <form action="Reportes/reporteCapacitaciones.php"  method="POST"> 
                                  <center><p><b>Reporte de Capacitaciones</b></p></center>    
                                   <input type="date" name="desdefecha" placeholder="desde fecha" style="height: 53px; " required="">
                                   <input type="date" name="hastafecha" placeholder="hasta fecha" style="height: 53px; " required="">
                                   <input type="submit" name="" value="Generar Reporte">
                                </form>
                            </td>

                            <td style="padding: 3%">
                               <form action="Reportes/reporteReuniones.php"  method="POST"> 
                                 <center><p><b>Reporte de Reuniones</b></p></center> 
                                  <input type="date" name="desdefecha" placeholder="desde fecha" 
                                                    style="height: 53px; width: 167px;"required="">
                                  <input type="date" name="hastafecha" placeholder="hasta fecha" 
                                                    style="height: 53px; width: 167px;  "required="">
                                  <input type="submit" name="" value="Generar Reporte" >
                               </form>
                            </td>
                        </tr>

                </table> 
            </div>
          </div>
        </div>

 </article>

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
  <script src="../../assets/js/main.js"></script>
</body>

</html>