<?php
  session_start();
?>
<!doctype html>
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
  //Selecciona el teléfono más nuevo en la base de datos:
  $NewQuery='SELECT * FROM phones WHERE visible = 1 ORDER BY id DESC LIMIT 1';
  //Realiza el Query:
  $NewResult=mysql_query($NewQuery);
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
        <li class="active"><a href="#">Inicio</a></li>
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
    <div id="testing" class="alert alert-warning fade in" role="alert">
      <strong>¡Aviso!</strong> Este sitio está en fase de prueba. Si ves algún error o tienes una sugerencia, dirígete a <a href="#">Contacto</a>.
    </div>
  </div>
</div>
</div>
<!--Fin Alerta-->
<!--Inicio contenido-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 col-sm-3">
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
    <div class="col-md-3 col-sm-5">
      <div class="thumbnail">
        <h4 class="text-center">Nuevo:</h4 >
        <?php while ($row = mysql_fetch_array($NewResult, MYSQL_ASSOC)):?>
        <img src="http://placehold.it/155x206" alt=" <?php echo $row['completename'] ?>">
        <div class="caption">
          <h4 class="text-center"><?php echo $row['completename'] ?></h4>
          <p>Esta es la descripción del teléfono. Fechas estimadas, etc. </p>
          <p><a href="viewer.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" role="button">Ver ficha</a> <a href="#" class="btn btn-default disabled" role="button">Comparar</a></p>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum ligula at eros feugiat laoreet. Sed in pretium ex. Ut dapibus quam sit amet est tristique consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer sodales rhoncus leo at pellentesque. In ac orci at arcu egestas lobortis. Phasellus sit amet eros velit. Fusce auctor sit amet ipsum sit amet dictum.
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="jumbotron">
        <h1>Encuentra tu teléfono ideal</h1>
        <p>Usa nuestro buscador simplificado y encuentra el teléfono que se acomoda a tus gustos</p>
        <p><a href="simple.php" class="btn btn-lg btn-primary" role="button">Buscar ahora</a></p>
      </div>
    </div>
  </div>
</div>
<!--Fin Contenido-->
<!--Inicio Footer-->
<footer class="footer">
      <div class="container">
        <p class="text-muted">PhoneSys ©2015.</p>
      </div>
    </footer>
</body>
</html>
