/*******************************
 ********* PETICIONES ********** 
 *******************************/


/* CAPACITACION */
jQuery(document).on('submit', '#formulario-capacitacion-admi', function (event) {
    event.preventDefault();
  
    const ingresar = document.getElementById('registrar-capacitacion-btn');
    const loading = document.getElementById('registrar-capacitacion-loading');
  
    jQuery.ajax({
      url: 'controller=capacitacion&&action=save',
      type: 'POST',
      dataType: 'json',
      data: $(this).serialize(),
      beforeSend: function () {
        ingresar.classList.add('ocultar');
        loading.classList.add('visible');
      }
    })
      .done(function (respuesta) {
        console.log(respuesta);
        if (!respuesta.error) {
            Swal.fire({
                title: respuesta.capacitacion,
                showClass: {
                  popup: 'animated fadeInDown faster'
                },
                hideClass: {
                  popup: 'animated fadeOutUp faster'
                },
                text: 'Registrado Correctamente',
                icon: "succes",
                footer: 'Esta información es importante.',
                backdrop: true,
                timer: 5000,
                timerProgressBar: true,
              });  
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
  
        ingresar.classList.remove('ocultar');
        loading.classList.remove('visible');
      })
      .fail(function (resp) {
        console.log(resp.responseText);
      })
      .always(function () {
        console.log("PETICIÓN REGISTRAR CAPACITACIÓN COMPLETADA!");
      });
  });
  