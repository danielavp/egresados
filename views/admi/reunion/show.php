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
            reunion__contenedor-tabla">
    <!--            -->
    <!-- ENCABEZADO -->
    <!--            -->
    <div class="reunion_encabezado contenedor-encabezado contenedor">
        <hr>

        <h1 class="titulo">Reuniones Programadas</h1>
        <h2 class="subtitulo">Lista</h2>

        <div class="pantalla-flexible encabezado__contenedor-iconos">
            <a href="ir-registro.php" class="enlace" title="Agregar Reunión">
                <span>
                    <i class="far fa-plus-square icono-awasome awasome-agregar"></i>
                </span>
            </a>
        </div>

        <hr>
    </div>

    <table id="datos" class="tabla-generica reunion__tabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>LUGAR </th>
                <TH>DESCRIPCION</TH>

                <TH>ACCION</TH>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaReunion as $reunion) { ?>
                <tr>
                    <td> <?php echo $reunion->getId(); ?></td>
                    <td> <?php echo $reunion->getFecha(); ?></td>
                    <td> <?php echo $reunion->getHora(); ?></td>
                    <td> <?php echo $reunion->getLugar(); ?></td>
                    <td> <?php echo $reunion->getDescripcion(); ?></td>


                    <td class="pantalla-flexible">
                          <a href="?controller=reunion&&action=updateshow&&id=<?php 
                                echo $reunion->getId() ?>" title="Editar Reunion" class="enlace">
                            <span>
                                <i class="far fa-edit icono-awasome awasome-editar"></i>
                            </span>
                        </a>
                        <a href="?controller=reunion&&action=delete&&id=<?php 
                                echo $reunion->getId() ?>" title="Eliminar Reunión" class="enlace">
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