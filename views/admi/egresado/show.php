<script>
  $(document).ready(function() {
    $('#datos').DataTable({
      language: {
        processing: "Tratamiento en curso...",
        search: " Buscar&nbsp;:",
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
      scrollY: 800,
      lengthMenu: [
        [10, 25, -1],
        [10, 25, "All"]
      ],
    });
  });
</script>

<!--                  -->
<!-- CONTENEDOR TABLA -->
<!--                  -->
<div class="contenedor-principal contenedor-tabla egresados__contenedor-tabla">
  <!--            -->
  <!-- ENCABEZADO -->
  <!--            -->
  <div class="egresados_encabezado contenedor-encabezado contenedor">
    <hr>

    <h1 class="titulo">Egresados</h1>
    <hr>
  </div>
  <table id="datos" class="egresado__tabla tabla-tarjeta">
    <thead>
      <tr>
        <th>Egresados</th>
      </tr>
    </thead>
    <tbody class="pantalla-flexible-between">
          <?php foreach ($listaUsuario as $usuario) {

            $id = $usuario->getId(); 
            if ($usuario->getTipo()==2){?>
            
            <tr class="pantalla-flexible" data-aos="zoom-in">
              <td>
              
              <?php 
                            include("../../../controllers/db/conexion.php");

                            $query = "SELECT * FROM usuarios";
                            $res   = $conexion->query($query);
                            while ($row = $res->fetch_assoc()) {
                                if ($row['id'] == $id) {
                                  
                                
                              ?>
                           
                               
                            <div class="tabla__tarjeta-informacion pantalla-flexible-between">
                            <img height="70px" src="data:image/jpeg;base64,<?php echo base64_encode($row['foto']); ?>">
                             </div>
                <?php
                } }

                ?>
                <article class="material-card Red">

                  <h2>
                    <span><?php echo $usuario->getNombre(); ?> <?php echo $usuario->getApellido(); ?></span>
                    <strong>
                      <i class="fas fa-id-card"></i>
                      <?php echo $usuario->getCodigo(); ?>
                    </strong>
                  </h2>
                  <div class="mc-content">
                    
                    <div class="mc-description pantalla-flexible">
                      <label>Estudios: <span><?php echo $usuario->getEstudios(); ?></span></label>
                      <label>Dirección: <span><?php echo $usuario->getDireccion(); ?></span></label>
                      <label>Telefono: <span><?php echo $usuario->getTelefono(); ?></span></label>
                      <label>Fecha Graduación: <span><?php echo $usuario->getTelefono(); ?></span></label>
                    </div>
                  </div>
                  <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                  </a>
                  <div class="mc-footer">
                    <h4>
                      Acciones
                    </h4>
                    <div class="pantalla-flexible contenedor" style="width: 80%;">
                      <a class="fa fa-fw fa-edit" title="Editar Egresado"></a>
                      <a class="fa fa-fw fa-eye" title="Ver Egresado"></a>
                      <a class="fa fa-fw fa-trash-alt" title="Eliminar Egresado"></a>
                    </div>
                  </div>
                </article>
            </td>
          </tr>
      <?php }
      } ?>
    </tbody>
  </table>
</div>
</div>



<!--   -->
<!--JS -->
<!--   -->
<script src="../../assets/js/main.js"></script>
<script>
  $(function() {
    $('.material-card > .mc-btn-action').click(function() {
      var card = $(this).parent('.material-card');
      var icon = $(this).children('i');
      icon.addClass('fa-spin-fast');

      if (card.hasClass('mc-active')) {
        card.removeClass('mc-active');

        window.setTimeout(function() {
          icon
            .removeClass('fa-arrow-left')
            .removeClass('fa-spin-fast')
            .addClass('fa-bars');

        }, 800);
      } else {
        card.addClass('mc-active');

        window.setTimeout(function() {
          icon
            .removeClass('fa-bars')
            .removeClass('fa-spin-fast')
            .addClass('fa-arrow-left');

        }, 800);
      }
    });
  });
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>


<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
</script>
<!-- DATATABLES -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> </script>
</body>