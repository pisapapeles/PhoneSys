<?php
  session_start();
?>
<!doctype html>
<html>
<?php
	$num_rec_per_page=8; 
  //Conecta al servidor:
  mysql_connect("localhost", "root", "root") or die (mysql_error ());
  //Conecta a la base de datos:
  mysql_select_db("phonesys") or die(mysql_error());
  //Selecciona todas las marcas individuales:
  $BrandsQuery='SELECT DISTINCT brand FROM phones';
  //Realiza el query:
  $BrandsResult=mysql_query($BrandsQuery);
  //Setea la variable de marca
	$brandvar = $_GET["brandid"];
	//Si la págian se nula, va a la 1. Si no, toma la página.
  if ($_GET["page"] == NULL) {
  	$page = 1;
  }
  else {
  	$page = $_GET["page"];
  };
  //Inicia desde la página-1*6
  $start_from = ($page-1) * $num_rec_per_page;
  //Si brandid es nulo, carga todos. Si es all, carga todos. Si es una en específico, carga solo esa marca	
  if ($_GET["brandid"] == NULL) {
  	$ListQuery= "SELECT * FROM phones WHERE visible = 1 ORDER BY rel_date DESC LIMIT $start_from, $num_rec_per_page";
  	$PageQuery= "SELECT * FROM phones WHERE visible = 1";
  }
  elseif ($_GET["brandid"] == "all"){
  	$ListQuery = "SELECT * FROM phones WHERE visible = 1 ORDER BY rel_date DESC LIMIT $start_from, $num_rec_per_page";
  	$PageQuery= "SELECT * FROM phones WHERE visible = 1";
	}
	else {
		$ListQuery = 'SELECT * FROM phones WHERE brand= "' . $brandvar . '"' . 'ORDER BY rel_date DESC LIMIT ' . $start_from . ', ' . $num_rec_per_page;
		$PageQuery= 'SELECT * FROM phones WHERE brand= "' . $brandvar . '"';
	};
	//Resultado de la lista de teléfonos
	$ListResult = mysql_query ($ListQuery);
	//Resultado de la página en la que está
  $PageResult = mysql_query($PageQuery);

  if(empty($ListQuery)) { 
    header('Location: /');
    exit; 
  }

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
        <li class="active"><a href="#">Lista</a></li>
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
        <p><strong>¡Aviso!</strong> Este sitio está en fase de prueba. Si ves algún error o tienes una sugerencia, dirígete a <a href="#">Contacto</a>.</p>
        <p><?php echo mysql_error(); ?></p>
      </div>
    </div>
  </div>
</div>
<!--Fin Alerta-->
<!--Inicio contenido-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 col-md-push-2">
      <?php while ($row = mysql_fetch_assoc($ListResult)) : ?> 
        <div class="col-md-3 col-sm-4">
          <div class="thumbnail">
            <img src="http://placehold.it/155x206" alt="">
            <div class="caption">
              <h5 class="text-center"><?php echo $row['completename']; ?></h5>
              <p><a href="/viewer.php?id=<?php echo $row['id']; ?>" class="btn btn-info center-block">Ver más</a></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?> 
    </div>
    <div class="col-md-2 col-md-pull-10">
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
<!--Inicio Footer-->
<footer class="footer">
  <div class="container">
    <p class="text-muted">PhoneSys ©2015.</p>
  </div>
</footer>
<!--Fin Footer-->
</body>
</html>
    