<?php
  session_start();
  if(isset($_GET['cerrar_sesion'])){
        session_destroy();
  }
  // $cerrar_sesion = $_GET['cerrar_sesion'];
  // if($cerrar_sesion){
  //
  // }
  include_once "funciones/funciones.php";
  include_once "templates/header.php";
 ?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="./index.html"><b>JME</b>Desarrollo</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login</p>
      <?php
        // session_start();
        // echo "<pre>";
        //   var_dump($_SESSION);
        // echo "</pre>";
      ?>

    <form role="form" name="login" id="login" method="post" action="modelo-admin.php">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="usuario" placeholder="Usuario...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="hidden" name="login-admin" value="0">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<?php
  include_once "templates/footer.php";
 ?>
