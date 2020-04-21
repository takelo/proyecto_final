$(document).ready(function(){
  $('#guardar-registro').on('submit', function(e){
    e.preventDefault();
//  alert('BOTON');
    var datos = $(this).serializeArray();
    // console.log(datos);
    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data){
        //  alert('llegue');
          //console.log(data);
          var resultado = data;
          if(resultado.respuesta == 'exito'){
            // alert('exito');
            Swal.fire(
              'Correcto!',
              'Se guardo se creo correctamente!',
              'success'
            )
          }else{
            // alert('fallo');
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'No se pudo guardar!'
            })
          }
      }

    })//ajax...
  })//#crear-admin


    $('.borrar_registro').on('click', function(e){
      e.preventDefault();
      var id = $(this).attr('data-id');
      var tipo = $(this).attr('data-tipo');
      Swal.fire({
        title: 'Estás seguro?',
        text: "No podras recuperarlo si lo eliminas!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            type: 'post',
            data: {
              'id': id,
              'registro': 'eliminar'
            },
            url: 'modelo-'+tipo+'.php',
            success: function(data){
                // console.log(data);
                var resultado = JSON.parse(data);
                $('[data-id="'+resultado.id_eliminado+'"]').parents('tr').remove();
            }
          })//ajax...
          Swal.fire(
            'Eliminado!',
            'Registro eliminado.',
            'success'
          )
        }
      })
      // console.log(id);
    });

  $('#login').on('submit', function(e){
    e.preventDefault();
    var datos = $(this).serializeArray();
    // console.log(datos);
    // console.log($(this).attr('method'));
    // console.log($(this).attr('action'));
    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data){
        // console.log(data);
        var resultado = data;
        if(resultado.respuesta == 'exitoso'){
          Swal.fire(
            'Login Correcto!',
            'Bienvenid@ '+ resultado.usuario+'!!',
            'success'
          )
          setTimeout(function(){
            window.location.href = 'admin.php';
          }, 2000);
        }else{
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Usuario o Password incorrecto!'
          })
        }
      }
    })//ajax...
  })//#login


      // $('#myTable').DataTable();

})//$(document).ready
