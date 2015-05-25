<html>
<head>
  <!--
  <script language="JavaScript">
    window.onbeforeunload = confirmExit;
    function confirmExit() {
        return "Si los datos han sido guardados, puedes salir";
    }
  </script>
  -->
	<title>Agregar teléfono</title>
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
        <li><a href="index.php">Inicio</a></li>
        <li class="active"><a href="">Agregar teléfono</a></li>
        <li><a href="edit_phone-php">Editar teléfono</a></li>
        <li><a href="/index.php">Volver al sitio</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--Fin Navbar-->
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-push-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Sistema de registro de smartphones y tablets V0.2.0 Alpha</h3>
        </div>
        <div class="panel-body">
            <form>
              <!--Visibilidad-->
              <form class="form-group">
                <h3>Visibilidad</h3>
                <div class="input-group">
                  <span class="input-group-addon">Visible</span>
                  <select class="form-control" name="visible">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                  </select>
                </div>
              </form>
              <!--Termina Visibilidad-->
              <!--Nombre-->
              <form class="form-group">
                <h3>Nombre</h3>
                <div class="input-group">
                  <span class="input-group-addon">Marca</span>
                  <input type="text" class="form-control" placeholder="Ingrese Marca" name="brand">
                </div>
                <span id="helpBlock" class="help-block">Ej.: Sony, Apple, Motorola</span>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Serie</span>
                  <input type="text" class="form-control" placeholder="Ingrese Serie" name="series">
                </div>
                <span id="helpBlock" class="help-block">Ej.: Xperia, iPhone, Moto</span>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Modelo</span>
                  <input type="text" class="form-control" placeholder="Ingrese Modelo" name="model">
                </div>
                <span id="helpBlock" class="help-block">Ej.: Z3 Compact, 6 Plus, X 2013</span>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Variante</span>
                  <input type="text" class="form-control" placeholder="Ingrese Variante" name="variant">
                </div>
                <span id="helpBlock" class="help-block">Ej.: 32GB, Dual SIM</span>
                <p>
              </form>
              <!--Termina Nombre-->
              <!--Links-->
              <form class="form-group">
                <h3>Links</h3>
                <div class="input-group">
                  <span class="input-group-addon">Foto</span>
                  <input type="text" class="form-control" placeholder="http://sitio.com/imagen.jpg" name="picture_url">
                </div>
                <span id="helpBlock" class="help-block">Link completo, foto de frente, fondo blanco y si es posible con pantalla encendida</span>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Review</span>
                  <input type="text" class="form-control" placeholder="http://pisapapeles.net/review-telefono/" name="review_url">
                </div>
                <span id="helpBlock" class="help-block">Link completo, Solo si está disponible en Pisapapeles</span>
                  
              </form>
              <!--Termina Links-->
              <!--Fechas y estado-->
              <form class="form-group">
                <h3>Fechas y estado</h3>
                <div class="input-group">
                  <span class="input-group-addon">Fecha de anuncio</span>
                  <input type="date" class="form-control" name="ann_date">
                </div>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Fecha de lanzamiento</span>
                  <input type="date" class="form-control" name="rel_date">
                </div>
                <span id="helpBlock" class="help-block">Si no se ha lanzado, dejar en blanco</span>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Estado</span>
                  <select class="form-control" name="status">
                    <option value="Anunciado">Anunciado</option>
                    <option value="Disponible">Disponible</option>
                    <option value="Descontinuado">Descontinuado</option>
                  </select>
                </div>
                <p>
              </form>
              <!--Termina Fechas y estado-->
              <!--Tamaño y peso-->
              <form class="form-group">
                <h3>Tamaño y peso</h3>
                <div class="input-group">
                  <span class="input-group-addon">Alto</span>
                  <input type="number" step="0.1" class="form-control" placeholder="Ingrese Alto" name="height">
                  <span class="input-group-addon">milímetros</span>
                </div>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Ancho</span>
                  <input type="number" step="0.1" class="form-control" placeholder="Ingrese Ancho" name="width">
                  <span class="input-group-addon">milímetros</span>
                </div>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Grosor</span>
                  <input type="number" step="0.1" class="form-control" placeholder="Ingrese Grosor" name="thick">
                  <span class="input-group-addon">milímetros</span>
                </div>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Peso</span>
                  <input type="number" step="0.1" class="form-control" placeholder="Ingrese Peso" name="weight">
                  <span class="input-group-addon">gramos</span>
                </div>
                <p>
              </form>
              <!--Termina Tamaño y peso-->
              <!--Pantalla-->
              <form class="form-group">
                <h3>Pantalla</h3>
                <div class="input-group">
                  <span class="input-group-addon">Resolución Alto</span>
                  <input type="number" step="1" class="form-control" placeholder="Ingrese Alto" name="height_res">
                  <span class="input-group-addon">pixeles</span>
                </div>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Resolución Ancho</span>
                  <input type="number" step="1" class="form-control" placeholder="Ingrese Ancho" name="width_res">
                  <span class="input-group-addon">pixeles</span>
                </div>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Densidad</span>
                  <input type="number" step="0.1" class="form-control" placeholder="Ingrese Densidad" name="ppi">
                  <span class="input-group-addon">pixeles por pulgada</span>
                </div>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Tamaño pantalla</span>
                  <input type="number" step="0.1" class="form-control" placeholder="Ingrese Tamaño" name="screensize">
                  <span class="input-group-addon">pulgadas</span>
                </div>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Cantidad de colores</span>
                  <input type="number" step="1" class="form-control" placeholder="Ingrese cantidad" name="colors">
                  <span class="input-group-addon">colores</span>
                </div>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Tecnología de pantalla</span>
                  <select class="form-control" name="display_tech">
                    <option value="Monocromática">Monocromática</option>
                    <option value="TFT LCD">TFT LCD</option>
                    <option value="IPS LCD">IPS LCD</option>
                    <option value="Retina Display">Retina Display</option>
                    <option value="OLED">OLED</option>
                    <option value="AMOLED">AMOLED</option>
                    <option value="Super AMOLED">Super AMOLED</option>
                  </select>
                </div>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Pantala táctil</span>
                  <select class="form-control" name="touch">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <p>
                <div class="input-group">
                  <span class="input-group-addon">Protección</span>
                  <select class="form-control" name="protection">
                    <option value="Ninguna">Ninguna</option>
                    <option value="Resistencia a rayones">Resistencia a rayones</option>
                    <option value="Gorilla Glass 2">Gorilla Glass 2</option>
                    <option value="Gorilla Glass 3">Gorilla Glass 3</option>
                    <option value="Otro">Otro</option>
                  </select>
                </div>
              </form>
              <!--Termina Pantalla-->
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>