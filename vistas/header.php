<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../public/css/_all-skins.css"> 
  <!--DATATABLES-->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">
    <link href="../public/datatables/buttons.datatables.min.css" rel="stylesheet"/>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <!--MATERIAL-ICON-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
    .main-sidebar, .left-side {
        position: fixed;
    }
    .content{
      margin-top: 50px;
    }
    .logo{
      color:white;
    }
    .logo:hover{
      color:white;
    }
    .dropdown-item{
      color:white;
    }
    #botoncerrar:hover{
      background: #1c5069;
      color:white;
    }
    </style>

<body class="sidebar-collapse"> 
    <div class="wrapper">
      <header class="main-header">
        <nav class="navbar-fixed-top" role="navigation" style="background:#1c5069;">
            <a class="logo">
                 <span class="logo-lg"><b>CRUD</b></span>
            </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">        
             <a class="dropdown-item" href="logout.php" class="btn btn-default btn-flat" id="botoncerrar">Cerrar sesión</a>
            </li> 
            </ul>
        <div> 
          </nav>
       </header>
    </div>
  </body>