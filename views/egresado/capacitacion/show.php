<div>
   
    <script>
        $(document).ready(function () {
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
                lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
            });
        });
    </script>
    
    <center><h1 style="color: #806B39"> LISTA DE CLIENTES </h1></center>
      
       <div class="table-responsive table-hover " style="padding: 20px; " >
           <table id="datos"  style="width:100%; background-color:#806B39 ; border-radius:10px; opacity:none; color: white; text-align: center;">
              <thead >
                  <tr>
                      <th ><center><B>CLIENTE</B></center></th>
                      <th><center><B>TELEFONO</B></center></th>
                      <th><center><B>DIRECCION</B></center></th>
                      <th><center><B>N° PAGINA</B></center></th>
                      <th><center><B>ACCION</B></center></th>  
                  </tr> 
              </thead>
              <tbody>
                  <?php foreach ($listaCliente as $cliente) {?>

                        
                        <tr>
                          <td><?php echo $cliente->getNombre(); ?></td>
                          <td><?php echo $cliente->getTelefono(); ?></td>
                          <td><?php echo $cliente->getDireccion(); ?></td>
                          <td><?php echo $cliente->getNpagina(); ?></td>
                          <td style="padding: 5px;">
                            <a class="btn btn-sm "style="background-color:#d79c26; color:black;"  href="?controller=clientes&&action=updateshow&&id_Cliente=<?php 
                                echo $cliente->getId_cliente() ?>">
                                                  Editar
                                          </a>| 
                             <a class="btn btn-sm btn-danger"style="  color:black;"  href="?controller=clientes&&action=delete&&id_Cliente=<?php 
                                echo $cliente->getId_cliente() ?>">
                                                  Eliminar
                                          </a>| 
                             <a class="btn btn-sm " style="background-color:#C5BA90;color:black;" href="?controller=clientes&&action=show3&&id_Cliente=<?php 
                                echo $cliente->getId_cliente() ?>" >
                                                  Visualizar
                                          </a>| 
                              <a class="btn  btn-sm" style="background-color: #79a536;color:black;" href="?controller=pedidos&&action=updateshow2&&id_Cliente=<?php 
                                echo $cliente->getId_cliente() ?>" >
                                                  Registrar Pedido
                                          </a>|              

                          </td>

                        </tr>
                        <?php } ?>
              </tbody>
          

        </table>

    </div>  


  

</div>
 <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script> 