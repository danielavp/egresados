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
            scrollY: 400,
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
<div class="contenedor-principal contenedor-tabla 
            encuesta__contenedor-tabla">

     <!--            -->
    <!-- ENCABEZADO -->
    <!--            -->
    <div class="capacitacion_encabezado contenedor-encabezado contenedor">
        <hr>
        <h1 class="titulo">ENCUESTAS</h1>
        <h2 class="subtitulo">Lista</h2>

        <div class="pantalla-flexible encabezado__contenedor-iconos">
            <a href="ir-registro.php" class="enlace" title="Agregar Capacitación">
                <span>
                    <i class="far fa-plus-square icono-awasome awasome-agregar"></i>
                </span>
            </a>
        </div>

        <hr>
    </div>

    <table id="datos" class="tabla-generica encuesta__tabla">
        <thead>
            <tr>
                <th>TEMA</th>
                <th>URL</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaEncuesta as $encuesta) { ?>
                <tr>
                    <td> <?php echo $encuesta->getTema(); ?></td>
                    <td> <?php echo $encuesta->getUrl(); ?></td>

                    <td class="pantalla-flexible">
                        <a href="?controller=encuesta&&action=delete&&id=<?php 
                                echo $encuesta->getId() ?>" title="Eliminar Encuesta" class="enlace">
                            <span>
                                <i class="far fa-trash-alt icono-awasome awasome-eliminar"></i>
                            </span>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
</script>
<!-- DATATABLES -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
</script>
</body>