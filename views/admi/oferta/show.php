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
            oferta-empleo__contenedor-tabla">
    <!--            -->
    <!-- ENCABEZADO -->
    <!--            -->
    <div class="oferta-empleo_encabezado contenedor-encabezado contenedor">
        <hr>
        <h1 class="titulo">Ofertas de Empleo</h1>
        <h2 class="subtitulo">Lista</h2>

        <div class="pantalla-flexible encabezado__contenedor-iconos">
            <a href="ir-registro.php" class="enlace" title="Agregar Oferta Empleo">
                <span>
                    <i class="far fa-plus-square icono-awasome awasome-agregar"></i>
                </span>
            </a>
        </div>

        <hr>
    </div>

    <table id="datos" class="oferta__tabla tabla-generica">
        <thead>
            <tr><th>N </th>
                <th>EMPRESA </th>
                <TH>VACANTES</TH>
                <th>CARGO</th>
                <th>EXPERIENCIA</th>
                <th>CIUDAD</th>
                <th>DESCRIPCION</TH>
                <TH>ACCION</TH>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaOferta as $oferta) { ?>
                <tr><td> <?php echo $oferta->getId(); ?></td>
                    <td> <?php echo $oferta->getEmpresa(); ?></td>
                    <td> <?php echo $oferta->getVacantes(); ?></td>
                    <td> <?php echo $oferta->getCargo(); ?></td>
                    <td> <?php echo $oferta->getExperiencia(); ?></td>

                    <td> <?php echo $oferta->getCiudad(); ?></td>
                    <td> <?php echo $oferta->getDescripcion(); ?></td>

                    <td class="pantalla-flexible">
                        <a href="?controller=oferta&&action=updateshow&&id=<?php 
                                echo $oferta->getId() ?>" title="Editar Capacitación" class="enlace">
                            <span>
                                <i class="far fa-edit icono-awasome awasome-editar"></i>
                            </span>
                        </a>
                        <a href="?controller=oferta&&action=delete&&id=<?php 
                                echo $oferta->getId() ?>" title="Eliminar Capacitación" class="enlace">
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


<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
</script>
<!-- DATATABLES -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
</script>
</body>