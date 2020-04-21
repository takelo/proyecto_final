$(document).ready(function(){

      $('#myTable').DataTable({
        "paging": true,
        "pageLength": 10,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "language" : {
          paginate: {
            next: 'Siguiente',
            previous: 'Anterior',
            last: 'Ultimo',
            first: 'Primero',
          },
          info:'Mostrando _START_ a _END_ de _TOTAL_ resultados',
          emptyTable: 'No hay registros',
          infoEmpty: '0 Registros',
          search: 'Buscar: '


        }
      });

      $('#boton_guardar').attr('disabled', true);

        $('#repetir_password').on('blur', function(){
          var password = $('#password').val();
          if($(this).val() == password){
            $('#resultado_password').text('Correcto');
            $('#resultado_password').parents('.form-group').addClass('alert-success').removeClass('alert-danger');
            $('input#password').parents('.form-group').addClass('alert-success').removeClass('alert-danger');
            $('#boton_guardar').attr('disabled', false);
          }else{
            $('#resultado_password').text('No son iguales');
            $('#resultado_password').parents('.form-group').addClass('alert-danger').removeClass('alert-success');
            $('input#password').parents('.form-group').addClass('alert-danger').removeClass('alert-success');
            $('#boton_guardar').attr('disabled', true);
          }
        });

})//$(document).ready
