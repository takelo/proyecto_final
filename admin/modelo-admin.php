<?php
// include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php';


//disponibles para todos

if(isset($_POST['usuario'])){$usuario = $_POST['usuario'];}
if(isset($_POST['nombre'])){$nombre = $_POST['nombre'];}
if(isset($_POST['password'])){$password = $_POST['password'];}

// if($conn->ping()){
//   echo "conectado";
// } else{
//   echo "No";
// }
if(isset($_POST['registro'])){//depues lo saco
  if($_POST['registro'] == 'nuevo'){
  //  die(json_encode($_POST));
    $opciones = array(
      'cost' => 12
    );
    $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);
    // echo $password_hashed;
    try {
      $stmt = $conn->prepare("INSERT INTO admins (usuario, nombre, password) VALUES (? , ? , ?)");
      $stmt->bind_param("sss", $usuario, $nombre, $password_hashed);
      $stmt->execute();
      $id_registro = $stmt->insert_id;
      if($id_registro > 0){
        $respuesta = array(
          'respuesta' => 'exito',
          'id' => $id_registro
        );
      }else{
          $respuesta = array(
            'respuesta' => 'error'
          );
      }
      $stmt->close();
      $conn->close();

    } catch (\Exception $e) {
      echo "Error: ".$e->getMessage();
    }
    //retorno mi respuesta
    die(json_encode($respuesta));
  }

    if($_POST['registro'] == 'actualizar'){
      $id_registro = $_POST['id_registro'];
      $opciones = array(
        'cost' => 12
      );
      try {
        $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);
        $stmt = $conn->prepare('UPDATE admins SET usuario = ?, nombre = ?, password = ? WHERE id = ?');
        $stmt->bind_param("sssi", $usuario, $nombre, $password_hashed, $id_registro);
        $stmt->execute();
        if($stmt->affected_rows){
          $respuesta = array(
            'respuesta' => 'exito',
            'id_actualizado' => $stmt->insert_id
          );
        }else{
          $respuesta = array(
            'respuesta' => 'error'
          );
        }
        $stmt->close();
        $conn->close();
      } catch (\Exception $e) {
        $respuesta = array(
          'respuesta' => $e->getMessage()
        );
      }
      //retorno
      die(json_encode($respuesta));
    }


}//despues lo saco
    if(isset($_POST['login-admin'])){
          // die(json_encode($_POST));
          try {
            $stmt = $conn->prepare("SELECT * FROM admins WHERE usuario = ?;");
            $stmt->bind_param("s", $usuario);
            $stmt->execute();
            $stmt->bind_result($id, $usr, $nom, $pas);
            if($stmt->affected_rows){
              $existe = $stmt->fetch();
              if($existe){
                if(password_verify($password, $pas)){
                  session_start();
                  $_SESSION['usuario'] = $usr;
                  $_SESSION['nombre'] = $nom;
                  $respuesta = array(
                    'respuesta' => 'exitoso',
                    'usuario' => $nom
                  );
                }else {
                  $respuesta = array(
                    'respuesta' => 'password_fallo'
                  );
                }
              }else{
                $respuesta = array(
                  'respuesta' => 'no_existe'
                );
              }
            }
          $stmt->close();
          $conn->close();
          } catch (\Exception $e) {
            echo "Error: ".$e->getMessage();
          }
          die(json_encode($respuesta));
        }

 ?>
