function Iniciar_Sesion() {
    let usu = document.getElementById("text_usuario").value;
    let pass = document.getElementById("text_contrasena").value;
    if (usu.lenght == 0 || pass.length == 0) {
       return Swal.fire(
         "Campos incompletos",
         "Debe llenar los campos requeridos",
         "warning"
       );
    }
    $.ajax({
        url: 'controlador/usuario/iniciar_sesion.php',
        type: 'POST',
        data: {
            u: usu,
            p: pass
        }
    }).done(function(resp){
        let data = JSON.parse(resp);
        if (data.length > 0) {
            
            $.ajax({
              url: "controlador/usuario/crear_sesion.php",
              type: "POST",
              data: {
                idusuario: data[0][0],
                eusuario: data[0][1],
                usuario: data[0][3],
                apusuario: data[0][4],
                amusuario: data[0][5],
                dusuario: data[0][7],
                fusuario: data[0][8],
                detalleusu: data[0][9],
                rol: data[0][10],
              },
            }).done(function (r) {
              Swal.fire({
                icon: "success",
                title: "Acceso Correcto",
                text: "Bienvenido " + data[0][10] + " " + data[0][3],
                timer: 2000,
                allowOutsideClick: false,
                heightAuto: false,
                didOpen: () => {
                  Swal.showLoading();
                  const b = Swal.getHtmlContainer().querySelector("b");
                  timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft();
                  }, 100);
                },
                willClose: () => {
                  clearInterval(timerInterval);
                },
              }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                  location.reload();
                }
              });
            });


            Swal.fire(
              "Sesión exitosa",
              "Bienvenido al sistema de Escalafón",
              "success"
            );
        } else {
            Swal.fire(
              "Error de sesión",
              "Usuario o clave incorrectos",
              "error"
            );
        }
    })
}