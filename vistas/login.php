<?php
require "../config/Conexion.php";
     if(array_key_exists('logina', $_POST) OR array_key_exists('clavea', $_POST))
     {
        $logina=$_POST['logina'];
        $clavea=$_POST['clavea'];
        $url="https://api.mocki.io/v1/2186297b";
        $json=file_get_contents($url);
        $datos=json_decode($json,true);
        // var_dump($datos);
        $usuario=$datos['user'];
        $pass=$datos['pass'];

        if($logina == $usuario && $clavea == $pass)
        {
          header("Location:productos.php");
        }
        else
        {
          echo "<script>alert('Usuario y/o contraseña están incorrectas');</script>";
        }
      }      
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="login-logo">
            <a id="titulo">CRUD</a>
    </div>
    <div class="login-box">
        <div class="login-box-body">
            <p id="sub" class="login-box-msg">Ingrese sus datos de acceso</p>
            <form method="post" name="frmAcceso" id="frmAcceso">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                     <div class="input-group-text"><i class="material-icons form-control-feedback">account_circle</i></div>
                  </div>
                  <input type="text" id="logina" name="logina" class="form-control" placeholder="Usuario" autocomplete="off">
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                  <div class="input-group-text"><i class="material-icons">lock</i></div>
                  </div>
                  <input type="password" id="clavea" name="clavea" class="form-control" placeholder="Password" autocomplete="off">
                </div>
                <div id="boton" class="row">
                    <div class="col-xs-4">
                        <button type="submit" id="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                    </div><!-- /.col -->
                </div>
            </form>     
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
  </body>


    <script src="../public/bootstrap/js/jquery-3.1.1.min.js"></script>
    <script src="../public/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/bootstrap/js/bootbox.min.js"></script>

  </body>
</html>
