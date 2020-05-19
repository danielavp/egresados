<?php

include_once('../../controllers/db/conexion.php');
 
session_start();


//Restringir acceso sin haberse logueado
if (isset($_SESSION['usuario'])) {
} else {
    
   echo '<SCRIPT LANGUAJE="javascript">
          location.href = "../../index.php";
</script>';
   exit;
 }
include_once('../../controllers/db/variables-sesion.php');
?>





<!DOCTYPE html>
<html>
<head>
  <title>principal admin</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">





    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">


    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/sweet-alert.css">
    <link rel="stylesheet" href="../../assets/css/ionicons.min.css">
     <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <script src="../../../assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



    

</head>
<body >
    
      
           
          <nav class="navbar navbar-expand-lg navbar-light " style=" border-radius: 1em; background:  #E0DEDE;" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
               
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               	 <li class="logo">
                  <img src="../../assets/img/logoufps.jpg" width="60px" height="60px" style="margin-left: 20px;">
                  <center><h6 style="color: black;">Ingenieria Electromecanica</h6></center>
                </li>

                <br>

                <li class="nav-item active" style="margin-top: 30px;">
                    <a class="nav-link" href="#"> 
                    <img src="../../assetsimg/add.png"  style="border-radius: 1em; height: 40px; width:40px; margin-left: 50px;">


                   <center> <span class="nav-link" style="margin-top: -12px; height: 1px; color: black; margin-left: 40px;" ><?php echo $usuario; ?></span></center>
                  </a>
                </li>

                
                <li class="nav-item active"  style="margin-top: 30px;">
                <input type="submit" name="Registrar" value="Capacitaciones"  class="btn " style="background-color: #DB2525; color: white; width:130px; height:40px; margin-left: 60px;">
                </li>

                  <li class="nav-item active"  style="margin-top: 30px;">
                <input type="submit" name="Registrar" value="Encuestas"  class="btn " style="background-color: #DB2525; color: white; width:120px; height:40px; margin-left: 70px;">
                </li>

                  <li class="nav-item active"  style="margin-top: 30px;">
                 <input type="submit" name="Registrar" value="Ofertas de Empleo"  class="btn " style="background-color: #DB2525; color: white; width:170px; height:40px; margin-left: 70px;">
                </li>

                <li class="nav-item active"  style="margin-top: 30px;">
                 <input type="submit" name="Registrar" value="Estadisticas"  class="btn " style="background-color: #DB2525; color: white; width:100px; height:40px; margin-left: 70px;">
                </li>

                  <li class="nav-item active"  style="margin-top: 30px;">
                 <input type="submit" name="Registrar" value="Otros"  class="btn " style="background-color: #DB2525; color: white; width:100px; height:40px; margin-left: 70px;">
                </li>

               </ul>
              
                <ul class="navbar-nav  mt-6 mt-lg-0" style="float: right;">

                <li class="nav-item active">
                  <a class="nav-link" href="#"> 
                    <img src="../img/user.png"  style="border-radius: 1em; height: 40px; width:40px; margin-left: 50px;">
                   <center> <span class="nav-link" style="margin-top: -12px; height: 1px; " ><?php echo $usuario; ?> nombre del egresado</span></center>
                  </a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" href="../../../controllers/cerrar-sesion.php" > 
                    <img src="../img/session.png"  style="border-radius: 1em; height: 40px; width:40px; margin-left: 10px;">
                   <span class="nav-link" style="margin-top: -12px; height: 1px; "> Cerrar Sesion</span>
                  </a>
                </li>


               </ul>
            </div>
          </nav>



          

<center><div class="slider">
    <ul>
        <br>
        <li><img src="../../assets/img/im1.jpg"  >
        </li>
        <li><img src="../../assets/img/im2.jpg"> 
        </li>
        <li><img src="../../assets/img/im3.jpg" >
        </li>
        <li><img src="../../assets/img/im4.jpg">
        </li>

    </ul>
</div>


</center>
<!-- 
           <div class="container" style="margin-top: 25px;padding: 10px">
    <table id="tablax" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido 1</th>
            <th>Apellido 2</th>
            <th>Telefono</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Romina</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Leonardo</td>
                <td>Ape1</td>
                <td>Ape2</td>
                <td>12345689</td>
            </tr>
        </tbody>
    </table>
</div>


     JQUERY
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#tablax').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
            });
        });
    </script> --> -->