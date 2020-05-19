<body>

  <!--            -->
  <!-- CONTENEDOR -->
  <!--            -->
  <div class="contenedor-login pantalla-flexible">

    <!--                  -->
    <!-- FORMULARIO LOGIN -->
    <!--                  -->
    <div class="login__contenedor-formulario contenedor efecto-formulario">

      <img class="logo" src="assets/img/UFPS/logoufps.jpg" alt="Error mostrar logo" title="Nuestro Logo!">

      <h1 class="titulo">Ingenieria Electromecanica</h1>
      <h2 class="subtitulo">Egresado</h2>

      <form id="login-form" action="" class="login__formulario" method="POST">

        <div class="efecto-formulario__contenedor">
          <label> Codigo <span class="req">*</span> </label>
          <input name="codigo" type="text" class="caja-texto" id="login-codigo">
        </div>

        <div class="efecto-formulario__contenedor">
          <label> Contraseña <span class="req">*</span> </label>
          <input name="clave" type="password" class="caja-texto" id="login-clave">
        </div>

        <div class="pantalla-flexible contenedor-selector">

          <!--          -->
          <!-- SELECTOR -->
          <!--          -->
          <div class="selector">
            <select name="tipo" class="caja-texto-selector" required="">
              <option selected value="0">Usuario </option>
              <option value="1" name="1">Administrador</option>
              <option value="2" name="2">Egresado</option>
            </select>
          </div>

          <!--                      -->
          <!-- RECUPERAR CONTRASEÑA -->
          <!--                      -->
          <span class="span">¿Olvido <a href="Registro.html" class="enlace">Contraseña</a>?</span>
        </div>

        <div class="pantalla-flexible">

          <!--           -->
          <!-- LOGUEARSE -->
          <!--           -->
          <input class="ingresar boton" type="submit" value="Ingresar" id="login-boton-ingresar">

          <!--        -->
          <!-- lOADER -->
          <!--        -->
          <div class="google-loader" id="login-loading">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!--    -->
  <!-- JS -->
  <!--    -->
  <script src="assets/js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/login.js"></script>
</body>