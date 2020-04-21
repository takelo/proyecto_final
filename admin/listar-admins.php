<?php
  // include_once "funciones/sesiones.php";
  include_once "funciones/funciones.php";

  include_once "templates/header.php";
  include_once "templates/barra.php";
  include_once "templates/navegacion.php";

 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Listado de Administradores</h1>
           <!-- <small>Administra los adminstradores</small> -->
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">Blank Page</li>
           </ol>
         </div>
       </div>
     </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
 <div class="card">
   <div class="card-header">
     <h3 class="card-title">Maneja los usuarios en esta sección</h3>
   </div>
   <!-- /.card-header -->
   <div class="card-body">
     <table id="myTable" class="table table-bordered table-hover">
       <thead>
       <tr>
         <th>Usuario</th>
         <th>Nombre</th>
         <th>Acciones</th>
       </tr>
       </thead>
       <tbody>
         <?php
          try {
            $sql = "SELECT id, usuario, nombre FROM admins";
            $resultado = $conn->query($sql);
          } catch (\Exception $e) {
            $error = $e->getMessage();
            echo $error;
          }
          while ($row =  $resultado->fetch_assoc()) {?>
            <tr>
              <td><?php  echo $row['usuario'];?></td>
              <td><?php  echo $row['nombre'];?></td>
              <td>
                <a href="editar-admin.php?id=<?php echo $row['id']?>" class="btn bg-orange btn-flat margin">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" data-id="<?php echo $row['id'] ?>" data-tipo="admin" class="btn bg-maroon btn-flat margin borrar_registro">
                  <i class="far fa-trash-alt"></i>
                </a>
              </td>
            </tr>
          <?php } ?>

       </tbody>
       <tfoot>
       <tr>
         <th>Usuario</th>
         <th>Nombre</th>
         <th>Acciones</th>
       </tr>
       </tfoot>
     </table>
   </div>
   <!-- /.card-body -->
 </div>
 <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
  $(function () {
      // $("#example1").DataTable({
      //   "responsive": true,
      //   "autoWidth": false,
      // });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

  <?php
    include_once "templates/footer.php";
   ?>
