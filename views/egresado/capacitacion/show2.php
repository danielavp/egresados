

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
    
    
   <center><h1 style="color: #806B39"> HISTORIAL </h1></center> 
      
       <div class="table-responsive table-hover" style="padding: 20px; " >
           <table id="tablaSus"  style="width:100%; background-color:#806B39 ; border-radius:10px; opacity:none; color: white; text-align: center;">
              <thead >
                  <tr>
                      <th>ID</th>
                      <th>Cliente</th>
                      <th>Precio</th>
                      
                      <th>Fecha Inicio</th>
                      <th>Fecha Entrega</th>
                      <th>Diseño</th>
                      <th>Tela</th>  
                  </tr> 
              </thead>
               <tbody>
                     <?php foreach ($listaPedido  as $pedidos) { ?>
                      <?php foreach ($listaCliente  as $clientes) { ?>
                        <?php
                                   $idCliente = $clientes->getId_cliente(); 
                                   $idPedidoCliente = $pedidos->getCliente(); 
                                   $nombre = $clientes->getNombre();

                         if( $idCliente == $idPedidoCliente ){
                          ?> 
                          <td><?php echo $pedidos->getid_Pedido();?></td>
                        <td><?php echo $nombre; } } ?></td>             
                        <td> <?php echo $pedidos->getPrecio(); ?> </td>
                        <td> <?php echo $pedidos->getAbono();  ?> </td>
                       
                        <td> <?php echo $pedidos->getFecha_inicio(); ?></td>
                        <td> <?php echo $pedidos->getFecha_entrega();?></td>
                        <td> <?php echo $pedidos->getModelo();?></td>
                        <td> <?php echo $pedidos->getTipo_tela();?></td>
                         <td>
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