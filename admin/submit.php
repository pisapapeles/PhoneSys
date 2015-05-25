<?php
	// Usuario, clave y servidor
	$servername = "localhost";
	$username = "rapaig_sqltest";
	$password = "sqltest";
	// Crear conexión
	$conn = new mysqli($servername, $username, $password);
	// Comprobar conexión
	if ($conn->connect_error) {
   	die("CONEXIÓN FALLIDA: " . $conn->connect_error);
	} 
	echo "Conectado correctamente";
//Modo debug:
error_reporting(E_ALL);
//Muestra de errores:
$errors = array(); 
/**
 * 
 * @return TRUE if connection established 
 * FALSE on error
 */
function connect(){
	$connection = mysql_connect(localhost, rapaig_sqltest, sqltest);
	$db = mysql_select_db(rapaig_sqlsearcher,$connection);    
	if (!$connection || !$db ){
    	return false; 
 	} 
 	else {
   		return true;
 	}
}


//So this code will run if user did submit the form:
if (!empty($_POST)){

 //Connect sql server:
 if ( !connect() ){
   $errors[] = "Error al establecer la conexión con la base de datos MySQL";
 }

//Lista de variables y POST:
$type = $_POST['type'];
$visible = $_POST['visible'];
$brand = $_POST['brand'];
$series = $_POST['series'];
$model = $_POST['model'];
$variant = $_POST['variant'];
$completename= $_POST['brand'] . " " . $_POST['series'] . " " . $_POST['model'] . " " . $_POST['variant'];
$picture_url = $_POST['picture_url'];
$review_url = $_POST['review_url'];
$ann_date = $_POST['ann_date'];
$rel_date = $_POST['rel_date'];
$status = $_POST['status'];
$height = $_POST['height'];
$width = $_POST['width'];
$thick = $_POST['thick'];
$weight = $_POST['weight'];
$height_res = $_POST['height_res'];
$width_res= $_POST['width_res'];
$ppi = $_POST['ppi'];
$screensize = $_POST['screensize'];
$colors = $_POST['colors'];
$display_tech = $_POST['display_tech'];
$touch = $_POST['touch'];
$protection = $_POST['protection'];
$back_cam_feat = $_POST['back_cam_feat'];
$front_cam = $_POST['front_cam'];
$a35mmjack = $_POST['a35mmjack'];
$wifi = $_POST['wifi'];
$wifi_tech = $_POST['wifi_tech'];
$gps = $_POST['gps'];
$gps_tech = $_POST['gps_tech'];
$fmradio = $_POST['fmradio'];
$datacharge = $_POST['datacharge'];
$accelerometer = $_POST['accelerometer'];
$gyro = $_POST['gyro'];
$compass = $_POST['compass'];
$barometer = $_POST['barometer'];
$proxi = $_POST['proxi'];
$sms = $_POST['sms'];
$mms = $_POST['mms'];
$email = $_POST['email'];
$webnav = $_POST['webnav'];
$webnav_tech = $_POST['webnav_tech'];
$ajava = $_POST['ajava'];
$battery_cap = $_POST['battery_cap'];
$battery_remove = $_POST['battery_remove'];
$battery_tech = $_POST['battery_tech'];
$design_colors = $_POST['design_colors'];
$others = $_POST['others'];
$speakers = $_POST['speakers'];
$stereo = $_POST['stereo'];
$int_mem = $_POST['int_mem'];
$ram = $_POST['ram'];
$a2g = $_POST['a2g'];
$a2g_bands = $_POST['a2g_bands'];
$a3g = $_POST['a3g'];
$a3g_bands = $_POST['a3g_bands'];
$a4g = $_POST['a4g'];
$a4g_bands = $_POST['a4g_bands'];
$bluetooth = $_POST['bluetooth'];
$bt_ver = $_POST['bt_ver'];
$nfc = $_POST['nfc'];
$infrared = $_POST['infrared'];
$simsize = $_POST['simsize'];
$os = $_POST['os'];
$cpu = $_POST['cpu'];
$cores = $_POST['cores'];
$frequency = $_POST['frequency'];
$gpu = $_POST['gpu'];
$msd_slot = $_POST['msd_slot'];
$back_cam = $_POST['back_cam'];
$back_cam_mp = $_POST['back_cam_mp'];
$back_cam_res = $_POST['back_cam_res'];
$back_cam_focus = $_POST['back_cam_focus'];
$back_cam_flash = $_POST['back_cam_flash'];
$back_cam_flash_tech = $_POST['back_cam_flash_tech'];
$back_cam_720p = $_POST['back_cam_720p'];
$back_cam_720p_fps = $_POST['back_cam_720p_fps'];
$back_cam_480p = $_POST['back_cam_480p'];
$back_cam_480p_fps = $_POST['back_cam_480p_fps'];
$back_cam_1080p = $_POST['back_cam_1080p'];
$back_cam_1080p_fps = $_POST['back_cam_1080p_fps'];
$back_cam_4k = $_POST['back_cam_4k'];
$back_cam_4k_fps = $_POST['back_cam_4k_fps'];
$back_cam_24k = $_POST['back_cam_24k'];
$back_cam_24k_fps = $_POST['back_cam_24k_fps'];
$front_cam_mp = $_POST['front_cam_mp'];
 

 //No error at this point - means that it successfully connected to SQL server: 
 if ( empty($errors) ){

  //let's prevent sql injection:

  $type = mysql_real_escape_string($type);
  $brand = mysql_real_escape_string($brand);
  $series = mysql_real_escape_string($series);
  $model = mysql_real_escape_string($model);
  $variant = mysql_real_escape_string($variant);
  $picture_url = mysql_real_escape_string($picture_url);
  $review_url = mysql_real_escape_string($review_url);
  $status = mysql_real_escape_string($status);
  //Please do this for all of them..
 }



//INSERT los valores en la tabla:
$query = "INSERT INTO `phones` (`type` , `visible` , `brand` , `series` , `model` , `variant` , `completename` , `picture_url` , `review_url` , `ann_date` , `rel_date` , `status` , `height` , `width` , `thick` , `weight` , `height_res` , `width_res` , `ppi` , `screensize` , `colors` , `display_tech` , `touch` , `protection` , `speakers` , `stereo` , `int_mem` , `ram` , `a2g` , `a2g_bands` , `a3g` , `a3g_bands` , `a4g` , `a4g_bands` , `bluetooth` , `bt_ver` , `nfc` , `infrared` , `simsize` , `os` , `cpu` , `cores` , `frequency` , `gpu` , `msd_slot` , `back_cam` , `back_cam_mp` , `back_cam_res` , `back_cam_focus` , `back_cam_flash` , `back_cam_flash_tech` ,  `back_cam_480p` , `back_cam_480p_fps` , `back_cam_720p` , `back_cam_720p_fps` , `back_cam_1080p` , `back_cam_1080p_fps` , `back_cam_4k` , `back_cam_4k_fps` , `back_cam_24k` , `back_cam_24k_fps` , `back_cam_feat` , `front_cam` , `front_cam_mp` , `a35mmjack` , `wifi` , `wifi_tech` , `gps` , `gps_tech` , `fmradio` , `datacharge` , `accelerometer` , `gyro` , `compass` , `barometer` , `proxi` , `sms` , `mms` , `email` , `webnav` , `webnav_tech` , `ajava` , `battery_cap` , `battery_remove` , `battery_tech` , `design_colors` , `others` ) VALUES ( '$type' , '$visible' , '$brand' , '$series' , '$model' , '$variant' , '$completename' , '$picture_url' , '$review_url' , '$ann_date' , '$rel_date' , '$status' , '$height' , '$width' , '$thick' , '$weight' , '$height_res' , '$width_res' , '$ppi' , '$screensize' , '$colors' , '$display_tech' , '$touch' , '$protection' , '$speakers' , '$stereo' , '$int_mem' , '$ram' , '$a2g' , '$a2g_bands' , '$a3g' , '$a3g_bands' , '$a4g' , '$a4g_bands' , '$bluetooth' , '$bt_ver' , '$nfc' , '$infrared' , '$simsize' , '$os' , '$cpu' , '$cores' , '$frequency' , '$gpu' , '$msd_slot' , '$back_cam' , '$back_cam_mp' , '$back_cam_res' , '$back_cam_focus' , '$back_cam_flash' , '$back_cam_flash_tech' , 'back_cam_480p' , 'back_cam_480p_fps' , '$back_cam_720p' , '$back_cam_720p_fps' , '$back_cam_1080p' , '$back_cam_1080p_fps' , '$back_cam_4k' , '$back_cam_4k_fps' , '$back_cam_24k' , '$back_cam_24k_fps' , '$back_cam_feat' , '$front_cam' , '$front_cam_mp' , '$a35mmjack' , '$wifi' , '$wifi_tech' , '$gps' , '$gps_tech' , '$fmradio' , '$datacharge' , '$accelerometer' , '$gyro' , '$compass' , '$barometer' , '$proxi' , '$sms' , '$mms' , '$email' , '$webnav' , '$webnav_tech' , '$ajava' , '$battery_cap' , '$battery_remove' , '$battery_tech' , '$design_colors' , '$others' )";
//So try it:
if ( !mysql_query($query) ){
   // 
   die (mysql_error());
   $errors[] = "No se pudieron registrar los valores";
} else {
   //Or on success:
   print ("Valores registrados con éxito");
   //or you can do redirect to some page, like this:

  //header('location: /thanks.php');
}


}

?>




            <?php if ( !empty($errors) ) : ?>

            <?php foreach($errors as $error): ?> 
             <p><b><?php echo $error; ?></b></p>
            <?php endforeach; ?> 
             <?php endif; ?>