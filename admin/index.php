<html>
<?php 
  //Conecta al servidor:
  mysql_connect("localhost", "root", "root") or die (mysql_error ());
  //Conecta a la base de datos:
  mysql_select_db("phonesys") or die(mysql_error());
  //Selecciona el teléfono más nuevo en la base de datos:
  $NewQuery='SELECT * FROM phones ORDER BY id DESC LIMIT 1';
  //Realiza el Query:
  $NewResult=mysql_query($NewQuery);
?>
<head>
	<meta charset="utf-8">
	<title>Inicio administración</title>
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
        <li class="active"><a href="">Inicio</a></li>
        <li><a href="add_phone.php">Agregar teléfono</a></li>
        <li><a href="edit_phone.php">Editar teléfono</a></li>
        <li><a href="/index.php">Volver al sitio</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--Fin Navbar-->
<!--inicio contenido-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
    			<h3 class="panel-title">Bienvenido, (USUARIO)</h3>
  			</div>
  			<div class="panel-body">
    			<p>ULTIMO LOGIN</p>
    			<p>IP</p>
    			<p><a href="#" class="btn btn-info">Configuraciones</a></p>
    			<p><a href="#" class="btn btn-danger">Cerrar sesión</a></p>
  			</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
        <h4 class="text-center">Nuevo:</h4 >
        <?php while ($row = mysql_fetch_array($NewResult, MYSQL_ASSOC)):?>
        <img src="http://placehold.it/155x206" alt=" <?php echo $row['completename'] ?>">
        <div class="caption">
          <h4 class="text-center"><?php echo $row['completename'] ?></h4>
          <p>Esta es la descripción del teléfono. Fechas estimadas, etc. </p>
          <p><a href="/viewer.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" role="button">Ver ficha</a> <a href="#" class="btn btn-default disabled" role="button">Editar</a></p>
          <?php endwhile; ?>
        </div>
      </div>
		</div>
	</div>
</div>
</body>
</html>
