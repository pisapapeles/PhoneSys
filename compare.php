<?php
  session_start();
?>
<html>
<?php
  //Conecta al servidor:
  mysql_connect("localhost", "root", "root") or die (mysql_error ());
  //Conecta a la base de datos:
  mysql_select_db("phonesys") or die(mysql_error());
  //Selecciona todas las marcas individuales:
  $BrandsQuery='SELECT DISTINCT brand FROM phones';
  //Realiza el query:
  $BrandsResult=mysql_query($BrandsQuery);
?>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/css/footer.css">
  <style>
    body {
      padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
    * {
      -webkit-border-radius: 0 !important;
      -moz-border-radius: 0 !important;
      border-radius: 0 !important;
    }
  </style>
</head>
<body>
<!--Inicio Navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">PhoneSys</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/">Inicio</a></li>
        <li><a href="/list.php">Lista</a></li>
        <li><a href="/compare.php">Comparador</a></li>
        <li><a href="/contact.php">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Ingresar Teléfono">
          </div>
          <button type="submit" class="btn btn-default">Buscar</button>
        </form>
      </ul>
    </div>
  </div>
</nav>
<!--Fin Navbar-->
<!--Inicio Alerta-->
<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
    <div id="testing" class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>¡Aviso!</strong> Este sitio está en fase de prueba. Si ves algún error o tienes una sugerencia, dirígete a <a href="#">Contacto</a>.
    </div>
  </div>
</div>
</div>
<!--Fin Alerta-->
<!--Inicio contenido-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 col-md-push-2">
      CONTENIDO
    </div>
    <div class="col-md-2 col-md-pull-2">
      <!--Panel de marcas-->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Lista de Marcas</h3>
        </div>
        <ul class="list-group">
          <a href="list.php?brandid=all" class="list-group-item">Todas</a>
          <?php while ($row = mysql_fetch_array($BrandsResult, MYSQL_ASSOC)):?>
          <a href="list.php?brandid=<?php echo $row['brand']?>" class="list-group-item"><?php echo $row['brand']?></a>
          <?php endwhile; ?>
        </ul>
      </div>
      <!--Fin Panel de marcas-->
    </div>
  </div>
</div>
<!--Fin Contenido-->
</body>
</html>