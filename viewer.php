<?php
  session_start();
  if(empty($_GET['id'])) { 
    header('Location: /');
    exit; 
  }
  


  //Conecta al servidor:
  mysql_connect("localhost", "root", "root") or die (mysql_error ());
  //Conecta a la base de datos:
  mysql_select_db("phonesys") or die(mysql_error());
  //Selecciona todas las marcas individuales:
  $BrandsQuery='SELECT DISTINCT brand FROM phones';
  //Realiza el query:
  $BrandsResult=mysql_query($BrandsQuery);
  //Selecciona la ID desde la tabla phones:
  $strSQL = "SELECT * FROM phones WHERE id=" . $_GET["id"];
  //Transforma el query en una variable:
  $result = mysql_query($strSQL);
  while($row = mysql_fetch_array($result)) {
    $id .= $row['id'];                                  //usada
    $type .= $row['type'];                              //usada
    $visible .= $row['visible'];                        //usada
    $brand .= $row['brand'];                            //usada
    $series .= $row['series'];                          //usada
    $model .= $row['model'];                            //usada
    $variant .= $row['variant'];                        //usada
    $picture_url .= $row['picture_url'];                //usada
    $review_url .= $row['review_url'];                  //usada
    $ann_date .= $row['ann_date'];                      //usada
    $rel_date .= $row['rel_date'];                      //usada
    $status .= $row['status'];                          //usada
    $height .= $row['height'];                          //usada
    $width .= $row['width'];                            //usada
    $thick .= $row['thick'];                            //usada
    $weight .= $row['weight'];                          //usada
    $height_res .= $row['height_res'];                  //usada
    $width_res.= $row['width_res'];                     //usada
    $ppi .= $row['ppi'];                                //usada
    $screensize .= $row['screensize'];                  //usada
    $colors .= $row['colors'];                          //usada
    $display_tech .= $row['display_tech'];              //usada
    $touch .= $row['touch'];                            //usada
    $protection .= $row['protection'];                  //usada
    $back_cam_feat .= $row['back_cam_feat'];            //usada
    $front_cam .= $row['front_cam'];                    //usada
    $a35mmjack .= $row['a35mmjack'];                    //usada
    $wifi .= $row['wifi'];                              //usada
    $wifi_tech .= $row['wifi_tech'];                    //usada
    $gps .= $row['gps'];                                //usada
    $gps_tech .= $row['gps_tech'];                      //usada
    $fmradio .= $row['fmradio'];                        //usada
    $datacharge .= $row['datacharge'];                  //usada
    $accelerometer .= $row['accelerometer'];            //usada
    $gyro .= $row['gyro'];                              //usada
    $compass .= $row['compass'];                        //usada
    $barometer .= $row['barometer'];                    //usada
    $proxi .= $row['proxi'];                            //usada
    $sms .= $row['sms'];                                //usada
    $mms .= $row['mms'];                                //usada
    $email .= $row['email'];                            //usada
    $webnav .= $row['webnav'];                          //usada
    $webnav_tech .= $row['webnav_tech'];                //usada
    $ajava .= $row['ajava'];                            //usada
    $battery_cap .= $row['battery_cap'];                //usada
    $battery_remove .= $row['battery_remove'];          //usada
    $battery_tech .= $row['battery_tech'];              //usada
    $design_colors .= $row['design_colors'];            //usada
    $others .= $row['others'];                          //usada
    $speakers .= $row['speakers'];                      //usada
    $stereo .= $row['stereo'];                          //usada
    $int_mem .= $row['int_mem'];                        //usada
    $ram .= $row['ram'];                                //usada
    $a2g .= $row['a2g'];                                //usada
    $a2g_bands .= $row['a2g_bands'];                    //usada
    $a3g .= $row['a3g'];                                //usada
    $a3g_bands .= $row['a3g_bands'];                    //usada
    $a4g .= $row['a4g'];                                //usada
    $a4g_bands .= $row['a4g_bands'];                    //usada
    $bluetooth .= $row['bluetooth'];                    //usada
    $bt_ver .= $row['bt_ver'];                          //usada
    $nfc .= $row['nfc'];                                //usada
    $infrared .= $row['infrared'];                      //usada
    $simsize .= $row['simsize'];                        //usada
    $os .= $row['os'];                                  //usada
    $cpu .= $row['cpu'];                                //usada
    $cores .= $row['cores'];                            //usada
    $frequency .= $row['frequency'];                    //usada
    $gpu .= $row['gpu'];                                //usada
    $msd_slot .= $row['msd_slot'];                      //usada
    $back_cam .= $row['back_cam'];                      //usada
    $back_cam_mp .= $row['back_cam_mp'];                //usada
    $back_cam_res .= $row['back_cam_res'];              //usada
    $back_cam_focus .= $row['back_cam_focus'];          //usada
    $back_cam_flash .= $row['back_cam_flash'];          //usada
    $back_cam_flash_tech .= $row['back_cam_flash_tech'];//usada
    $back_cam_480p .= $row['back_cam_480p'];            //usada
    $back_cam_480p_fps .= $row['back_cam_480p_fps'];    //usada
    $back_cam_720p .= $row['back_cam_720p'];            //usada
    $back_cam_720p_fps .= $row['back_cam_720p_fps'];    //usada
    $back_cam_1080p .= $row['back_cam_1080p'];          //usada
    $back_cam_1080p_fps .= $row['back_cam_1080p_fps'];  //usada
    $back_cam_4k .= $row['back_cam_4k'];                //usada
    $back_cam_4k_fps .= $row['back_cam_4k_fps'];        //usada
    $back_cam_24k .= $row['back_cam_24k'];              //usada
    $back_cam_24k_fps .= $row['back_cam_24k_fps'];      //usada
    $front_cam_mp .= $row['front_cam_mp'];              //usada
  }
  if(empty($brand)) { 
    header('Location: /');
    exit; 
  }
?>
<!doctype html>
<html>
<?php 

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
    <div class="col-md-2 col-sm-4">
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
    </div>
    <div class="col-md-10 col-sm-8">
    	<div class="page-header text-center">
  			<h1><?php echo $brand . " " . $series . " " . $model; ?>  <small><?php echo $variant ?></small></h1>
			</div>
    	<div class="row">
    		<div class="col-md-3">
    			<div class="thumbnail">
      			<img src="http://placehold.it/300x400" alt="fotofono">
      			<div class="caption">
      				<?php if ($review_url == NULL): ?>
      				<?php else: ?>
        			<p><h4>Puntaje Review:</h4></p>
        			<p><a href="<?php echo $review_url ?>" class="btn btn-primary" role="button">Ver Review</a><?php endif ?><a href="#" class="btn btn-default" role="button">Comparar</a></p>
              <p>Disponible en:</p>
              <p><img class="img-thumbnail" src="http://placehold.it/200x80"></p>
              <p><img class="img-thumbnail" src="http://placehold.it/200x80"></p>
      			</div>
    			</div>
    		</div>
    		<div class="col-md-9">
    			<div class="panel panel-default">
  					<div class="panel-heading">
  						<h3 class="panel-title">Especificaciones</h3>
  					</div>
						<table class="table table-bordered table-condensed table-striped table-responsive">
							<tr><th rowspan="2" class="info">Fechas</th>
							<th>Estado</th><td><?php echo $status; ?>, lanzado el <?php echo $rel_date; ?></td></tr>
							<tr><th>Fecha de anuncio</th><td><?php echo $ann_date; ?></td></tr>
							<tr><th rowspan="3" class="info">Dimensiones y color</th>
							<th>Tamaño</th><td><?php echo $height . "x" . $width . "x" . $thick . " mm."; ?></td></tr>
							<tr><th>Peso</th><td><?php echo $weight; ?> gramos</td></tr>
							<tr><th>Colores</th><td><?php echo $design_colors ?></td></tr>
							<tr><th rowspan="6" class="info">Pantalla</th>
							<th>Tipo de pantalla</th><td><?php echo $display_tech . ", "; ?><?php if ($colors == 16000000) { echo "16M";} else {echo $colors;} ?> colores</td></tr>
							<tr><th>Resolución</th><td><?php echo $width_res . "x" . $height_res; ?> pixeles</td></tr>
							<tr><th>Tamaño</th><td><?php echo $screensize; ?> pulgadas</td></tr>
							<tr><th>Densidad</th><td><?php echo $ppi; ?> pixeles por pulgada</td></tr>
							<tr><th>Pantalla touch</th><td><?php if ($touch == 1) {echo "Sí";} else {echo "No";} ?></td></tr>
							<tr><th>Protección</th><td><?php echo $protection; ?></td></tr>
							<tr><th rowspan="4" class="info">Plataforma</th>
							<th>Sistema Operativo</th><td><?php echo $os; ?></td></tr>
							<tr><th>CPU</th><td><?php echo $cpu . ", " . $cores; ?><?php if ($cores == 1) { echo " nucleo";} else {echo " nucleos";} ?> a <?php echo $frequency; ?>GHz.</td></tr>
							<tr><th>GPU</th><td><?php echo $gpu ?></td></tr>
							<tr><th>Memoria RAM</th><td><?php if ($ram >= 1024) {echo ($ram/1024 . " GB");} else {echo $ram . " MB";}; ?></td></tr>
							<tr><th rowspan="2" class="info">Memoria interna</th>
							<th>Puerto MicroSD</th><td><?php if ($msd_slot == 1) {echo "Sí";} else {echo "No";} ?></td></tr>
							<tr><th>Memoria Interna</th><td><?php if ($int_mem >= 1024) {echo ($int_mem/1024 . " GB");} else {echo $int_mem . " MB";}; ?></td></tr>
							<tr><th rowspan="<?php if ($back_cam ==1) {echo 10;} else {echo 2;}  ?>" class="info">Cámara</th>
							<th>Primaria</th><td><?php if ($back_cam == 1) {echo "Sí, " . $back_cam_mp . "MP (" . $back_cam_res . ")";} else {echo "No";}?></td></tr>
							<?php if ($back_cam ==1): ?>
								<tr><th>Sistema de enfoque</th><td><?php echo $back_cam_focus ?></td></tr>
								<tr><th>Flash</th><td><?php if ($back_cam_flash ==1) {echo "Sí, " . $back_cam_flash_tech;} else {echo "No";} ?></td></tr>
								<tr><th>Otros</th><td><?php echo $back_cam_feat; ?></td></tr>
								<tr><th>Video 480p</th><td><?php if($back_cam_480p ==1): ?>Sí, a <?php echo $back_cam_480p_fps ?> cuadros por segundo<?php else: ?>No<?php endif ?></td></tr>
								<tr><th>Video HD (720p)</th><td><?php if($back_cam_720p ==1): ?>Sí, a <?php echo $back_cam_720p_fps ?> cuadros por segundo<?php else: ?>No<?php endif ?></td></tr>
								<tr><th>Video FullHD (1080p)</th><td><?php if($back_cam_1080p ==1): ?>Sí, a <?php echo $back_cam_1080p_fps ?> cuadros por segundo<?php else: ?>No<?php endif ?></td></tr>
								<tr><th>Video 2.4K</th><td><?php if($back_cam_24k ==1): ?>Sí, a <?php echo $back_cam_24k_fps ?> cuadros por segundo<?php else: ?>No<?php endif ?></td></tr>
								<tr><th>Video 4K</th><td><?php if($back_cam_4k ==1): ?>Sí, a <?php echo $back_cam_4k_fps ?> cuadros por segundo<?php else: ?>No<?php endif ?></td></tr>
							<?php endif; ?>
							<tr><th>Secundaria</th><td><?php if ($front_cam == 1) {echo "Sí, " . $front_cam_mp . "MP.";} else {echo "No";}?></td></tr>
							<tr><th rowspan="<?php if ($speakers == 1) {echo 3;} else {echo 2;} ?>" class="info">Sonido</th>
							<th>Parlantes</th><td><?php  if ($speakers == 1){echo "Sí";} else {echo "No";} ?></td></tr>
							<?php if ($speakers == 1): ?>
								<tr><th>Estéreo</th><td><?php if ($stereo == 1) {echo "Sí";} else {echo "No";} ?></td></tr>
							<?php endif ?>
							<tr><th>Conector audífonos 3,5mm.</th><td><?php if ($a35mmjack == 1) {echo "Sí";} else {echo "No";} ?></td></tr>
              <tr><th rowspan="10" class="info">Conexión y redes</th>
              <th>WiFi</th><td><?php  if ($wifi == 1){echo "Sí, "; echo $wifi_tech;} else {echo "No";} ?></td></tr>
              <tr><th>Bluetooth</th><td><?php  if ($bluetooth == 1){echo "Sí, "; echo "versión " . $bt_ver;} else {echo "No";} ?></td></tr>
              <tr><th>NFC</th><td><?php  if ($nfc == 1){echo "Sí";} else {echo "No";} ?></td></tr>
              <tr><th>GPS</th><td><?php  if ($gps == 1){echo "Sí, "; echo $_gps_tech;} else {echo "No";} ?></td></tr>
              <tr><th>Radio FM</th><td><?php  if ($fmradio == 1){echo "Sí";} else {echo "No";} ?></td></tr>
              <tr><th>Puerto Infrarrojo</th><td><?php  if ($infrared == 1){echo "Sí";} else {echo "No";} ?></td></tr>
              <tr><th>Tamaño SIM</th><td><?php echo $simsize; ?></td></tr>
              <tr><th>2G</th><td><?php if ($a2g == 1) {echo "Sí. Bandas: " . $a2g_bands;} else {echo "No";} ?></td></tr>
              <tr><th>3G</th><td><?php if ($a3g == 1) {echo "Sí. Bandas: " . $a3g_bands;} else {echo "No";} ?></td></tr>
              <tr><th>4G</th><td><?php if ($a4g == 1) {echo "Sí. Bandas: " . $a4g_bands;} else {echo "No";} ?></td></tr>
              <tr><th rowspan="4" class="info">Batería</th>
              <th>Conexión de carga</th><td><?php echo $datacharge ?></td></tr>
              <tr><th>Tipo de batería</th><td><?php echo $battery_tech?></td></tr>
              <tr><th>Capacidad</th><td><?php echo $battery_cap ?>mAh.</td></tr>
              <tr><th>Removible</th><td><?php  if ($battery_remove == 1){echo "Sí";} else {echo "No";} ?></td></tr>
              <tr><th rowspan="7" class="info">Sensores y características</th>
              <th>Sensores</th><td><?php if ($accelerometer == 1){echo "Acelerómetro";} else {echo "";}; if ($gyro == 1){echo ", Giroscopio";} else {}; if ($compass == 1){echo ", Compás";} else {}; if ($barometer == 1){echo ", Barómetro";} else {}; if ($proxi == 1){echo ", Proximidad";} else {}; ?></td></tr>
              <tr><th>SMS</th><td><?php  if ($sms == 1){echo "Sí";} else {echo "No";} ?></td></tr>
              <tr><th>MMS</th><td><?php  if ($mms == 1){echo "Sí";} else {echo "No";} ?></td></tr>
              <tr><th>E-Mail</th><td><?php  if ($email == 1){echo "Sí";} else {echo "No";} ?></td></tr>
              <tr><th>Java</th><td><?php  if ($ajava == 1){echo "Sí";} else {echo "No";} ?></td></tr>
              <tr><th>Navegación Web</th><td><?php if ($webnav ==1) {echo "Sí, " . $webnav_tech;} else {echo "No";} ?></td></tr>
              <tr><th>Otros</th><td><?php echo $others ?></td></tr>
						</table>
					</div>
    		</div>
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
<!--Fin Footer-->
</body>
</html>