<?php
  // include_once "funciones/sesiones.php";
  include_once "funciones/funciones.php";
  $id = $_GET['id'];
  if(!filter_var($id, FILTER_VALIDATE_INT)){
    die("ERROR");
  }

  include_once "templates/header.php";
  include_once "templates/barra.php";
  include_once "templates/navegacion.php";

 ?>



  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Administrado</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Editar Administrador</h3>
        </div>
        <?php
          $sql = "SELECT * FROM admins WHERE id = $id";
          $resultado = $conn->query($sql);
          $row = $resultado->fetch_assoc();
          // echo "<pre>";
          //   var_dump($row);
          // echo "</pre>";
         ?>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
          <div class="card-body">
            <div class="form-group">
              <label for="usuario">Usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de usuario para ingresar..." value="<?php echo $row['usuario'] ?>">
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo del administrador..." value="<?php echo $row['nombre'] ?>">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password para ingresar...">
            </div>


          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <input type="hidden" name="registro" value="actualizar">
            <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include_once "templates/footer.php";
   ?>
