


<body>

<div class="contenedor-resgistro-informacion-principal">
  <form action="?controller=capacitacion&&action=update" method="POST" class="registro">
    <div class="encabezado">
      <h1 class="titulo"> Mi perfil </h1>
    </div>
    
    <tr class="pantalla-flexible" data-aos="zoom-in">
              <td>
              <div class="tabla__tarjeta-informacion pantalla-flexible-between">
                  
              

              
                </div>
                <div class="tabla__tarjeta-informacion pantalla-flexible-between">
                  <label>Nombre: </label>
                  <span disabled="">  <?php echo $usuario->getNombre(); ?>   </span>
                </div>
                <hr>
                <div class="tabla__tarjeta-informacion pantalla-flexible-between">
                  <label>Apellido: </label>
                  <span disabled="">  <?php echo $usuario->getApellido(); ?>   </span>
                </div>
                <hr>
                <div class="tabla__tarjeta-informacion pantalla-flexible-between">
                  <label>Codigo: </label>
                  <span disabled="">  <?php echo $usuario->getCodigo(); ?>   </span>
                </div>
                <hr>
                <div class="tabla__tarjeta-informacion pantalla-flexible-between">
                  <label>Direccion: </label>
                  <span disabled="">  <?php echo $usuario->getDireccion(); ?>   </span>
                </div>
                <hr>
                <div class="tabla__tarjeta-informacion pantalla-flexible-between">
                  <label>Telefono: </label>
                  <span disabled="">  <?php echo $usuario->getTelefono(); ?>   </span>
                </div>
                <hr>
                <div class="tabla__tarjeta-informacion pantalla-flexible-between">
                  <label>Graduacion: </label>
                  <span disabled="">  <?php echo $usuario->getAnopromo(); ?>   </span>
                </div>
                <hr>
                <div class="tabla__tarjeta-informacion pantalla-flexible-between">
                  <label>Estudios: </label>
                  <span disabled="">  <?php echo $usuario->getEstudios(); ?>   </span>
                </div>
                <hr>
                <div class="linea-caja-texto pantalla-flexible">
          
        </div>
      </div>
    </form>
               
</div>
</body>