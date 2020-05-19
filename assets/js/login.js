
/*******************************
 *********** EVENTOS *********** 
 *******************************/

$(".efecto-formulario").find("input, textarea").on("keyup blur focus", function (e) {
	var $this = $(this),
	label = $this.prev("label");
	if (e.type === "keyup") {
		if ($this.val() === "") {
			label.removeClass("activo realce");
		} else {
			label.addClass("activo realce");
		}
	} else if (e.type === "blur") {
		if($this.val() === "") {
			label.removeClass("activo realce"); 
			} else {
			label.removeClass("realce");   
			}   
	} else if (e.type === "focus") {
		if($this.val() === "") {
			label.removeClass("realce"); 
		} 
		else if($this.val() !== "") {
			label.addClass("realce");
		}
	}
});

/*******************************
 ********* PETICIONES ********** 
 *******************************/

jQuery(document).on('submit', '#login-form', function (event) {
  event.preventDefault();

  const boton_ingresar = document.getElementById('login-boton-ingresar');
  const login_loading = document.getElementById('login-loading');

  jQuery.ajax({
    url: 'controllers/validar_sesion.php',
    type: 'POST',
    dataType: 'json',
    data: $(this).serialize(),
    beforeSend: function () {
      boton_ingresar.classList.add('ocultar');
      login_loading.classList.add('visible');
    }
  })
    .done(function (respuesta) {
      console.log(respuesta);
      if (!respuesta.error) {
        if (respuesta.tipo_usuario == 1) {
          window.location = "views/admi/inicio.php";
        } else {
          window.location = "views/egresado/principal.php";
        }
      } else {
        Swal.fire({
          title: respuesta.informacion,
          showClass: {
            popup: 'animated fadeInDown faster'
          },
          hideClass: {
            popup: 'animated fadeOutUp faster'
          },
          text: 'Vuelva a intentarlo',
          icon: respuesta.alerta,
          footer: 'Esta información es importante.',
          backdrop: true,
          timer: 5000,
          timerProgressBar: true,
        });
      }

      boton_ingresar.classList.remove('ocultar');
      login_loading.classList.remove('visible');
    })
    .fail(function (resp) {
      console.log(resp.responseText);
    })
    .always(function () {
      console.log("PETICIÓN LOGIN COMPLETADA!");
    });
});

