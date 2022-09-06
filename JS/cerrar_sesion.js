function destruir_sesion(){
    Swal.fire({
        title: '¿Está seguro de salir?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, deseo salir',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: '../controlador/usuario/destruir_sesion.php'
          })
        location.reload();
        }
      })
}