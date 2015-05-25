<html>
<head>
  <script language="JavaScript">
    window.onbeforeunload = confirmExit;
    function confirmExit() {
        return "Si los datos han sido guardados, puedes salir";
    }
  </script>
	<meta charset="UTF-8">
	<link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/regsys.css">
	<title> Registro V 0.1.3 Alpha </title>
</head>
<body>
	<form method="post" name="form">
    <div class="title">Sistema de registro de smartphones y tablets V0.1.3 Alpha</div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Tipo</label>
        </div>
        <div class="inputs">
          <div class="singleinput"><input type="radio" name="type" value="Smartphone" checked>Smartphone</div>
          <div class="singleinput"><input type="radio" name="type" value="Tablet">Tablet</div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Visibilidad</label>
        </div>
        <div class="inputs">
          <div class="singleinput"><input type="radio" name="visible" value="1" checked>Visible</div>
          <div class="singleinput"><input type="radio" name="visible" value="0" >Escondido</div>
        </div>
      </div>
			<div class="seccion">
				<div class="tituloseccion">
					<label>Nombre</label>
				</div>
				<div class="inputs">
					<div class="singleinput">Marca: <input type="text" name="brand" required> Ej.: Sony</div>
					<div class="singleinput">Serie: <input type="text" name="series" required>Ej.: Xperia</div>
					<div class="singleinput">Modelo: <input type="text" name="model" required>Ej.: Z3</div>
					<div class="singleinput">Variante: <input type="text" name="variant" required>Ej.: Dual SIM, 16GB</div>
				</div>
			</div>
			<div class="seccion">
				<div class="tituloseccion">
					<label>Links</label>
				</div>
				<div class="inputs">
					<div class="singleinput">link foto: <input type="text" name="picture_url" required> La foto debe ser de frente, en fondo blanco. Si se puede, con pantalla encendida. Link completo.</div>
					<div class="singleinput">Link review: <input type="text" name="review_url">Link completo. Solo si hay review de Pisapapeles. No link a otro sitio.</div>
				</div>
			</div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Fechas y estado</label>
        </div>
        <div class="inputs">
          <div class="singleinput"> Fecha de anuncio: <input type="date" name="ann_date" required></div>
          <div class="singleinput"> Fecha de lanzamiento: <input type="date" name="rel_date"> Si no ha sido lanzado, no poner. Fecha de lanzamiento internacional.</div>
          <div class="singleinput"> Estado: <select name="status">
            <option value="Anunciado">Anunciado</option>
            <option value="Disponible">Disponible</option>
            <option value="Descontinuado">Descontinuado</option>
          </select></div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Tamaño y peso</label>
        </div>
        <div class="inputs">
          <div class="singleinput"> Alto: <input type="number" name="height" step="0.1" required> mm</div>
          <div class="singleinput"> Ancho: <input type="number" name="width" step="0.1" required> mm</div>
          <div class="singleinput"> Grosor: <input type="number" name="thick" step="0.1" required> mm</div>
          <div class="singleinput"> Peso: <input type="number" name="weight" step="0.1" required> gramos</div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Pantalla</label>
        </div>
        <div class="inputs">
          <div class="singleinput"> Resolución Alto: <input type="number" name="height_res" required> pixeles</div>
          <div class="singleinput"> Resolución Ancho: <input type="number" name="width_res" required> pixeles</div>
          <div class="singleinput"> Densidad de pixeles: <input type="number" name="ppi" step="0.1" required> pixeles por pulgada</div>
          <div class="singleinput"> Tamaño de pantalla: <input type="number" name="screensize" step="0.1" required> pulgadas</div>
          <div class="singleinput"> Cantidad de colores: <input type="number" name="colors" required> colores</div>
          <div class="singleinput"> Tecnología de pantalla: <select name="display_tech">
            <option value="Monocromática">Monocromática</option>
            <option value="TFT LCD">TFT LCD</option>
            <option value="IPS LCD">IPS LCD</option>
            <option value="Retina Display">Retina Display</option>
            <option value="OLED">OLED</option>
            <option value="AMOLED">AMOLED</option>
            <option value="Super AMOLED">Super AMOLED</option>
          </select>
            </div>
          <div class="singleinput"> Pantalla tactil?: Sí <input type="radio" name="touch" value="1"> No<input type="radio" name="touch" value="0" type="radio"></div>
          <div class="singleinput"> Protección: <select name="protection">
            <option value="Ninguna">Ninguna</option>
            <option value="Resistencia a rayones">Resistencia a rayones</option>
            <option value="Gorilla Glass 2">Gorilla Glass 2</option>
            <option value="Gorilla Glass 3">Gorilla Glass 3</option>
            <option value="Otro">Otro</option>
          </select>
          </div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Audio</label>
        </div>  
        <div class="inputs">
          <div class="singleinput"> Parlantes?: Sí <input type="radio" name="speakers" value="1"> No<input type="radio" name="speakers" value="0"></div>
          <div class="singleinput"> Estereo?: Sí <input type="radio" name="stereo" value="1"> No<input type="radio" name="stereo" value="0"></div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Memoria</label>
        </div>
        <div class="inputs">
          <div class="singleinput"> Memoria Interna: <input type="number" name="int_mem"> Megabytes (sí, debo arregalr esto)</div>
          <div class="singleinput"> Memoria RAM: <input type="number" name="ram"> Megabytes (sí, debo arreglar esto)</div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Red móvil</label>
        </div>
        <div class="inputs">
        <div class="singleinput"> 2G: Sí <input type="radio" name="a2g" value="1"> No <input type="radio" name="a2g" value="0"></div>
        <div class="singleinput"> Bandas 2G: <input type="text" name="a2g_bands"> ingresar con un / entre cada uno sin espacio</div>
        <div class="singleinput"> 3G: Sí <input type="radio" name="a3g" value="1"> No <input type="radio" name="a3g" value="0"></div>
        <div class="singleinput"> Bandas 3G: <input type="text" name="a3g_bands"> ingresar con un / entre cada uno sin espacio</div>
        <div class="singleinput"> 4G: Sí <input type="radio" name="a4g" value="1"> No <input type="radio" name="a4g" value="0"></div>
        <div class="singleinput"> Bandas 4G: <input type="text" name="a4g_bands"> ingresar con un / entre cada uno sin espacio </div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Conectividad</label>
        </div>
        <div class="inputs">
          <div class="singleinput"> Tamaño SIM: <select name="simsize">
            <option value="SIM">SIM</option>
            <option value="Micro SIM">Micro SIM</option>
            <option value="Nano SIM">Nano SIM</option>
          </select></div>
          <div class="singleinput"> WiFi: Sí <input type="radio" name="wifi" value="1"> No <input type="radio" name="wifi" value="0"></div>
          <div class="singleinput"> Versión WiFi: <input type="text" name="wifi_tech"></div>
          <div class="singleinput"> Bluetooth: Sí <input type="radio" name="bluetooth" value="1"> No <input type="radio" name="bluetooth" value="0"></div>
          <div class="singleinput"> Versión Bluetooth: <select name="bt_ver">
            <option value="1.0">1.0</option>
            <option value="1.1">1.1</option>
            <option value="1.2">1.2</option>
            <option value="2.0">1.2</option>
            <option value="2.1">1.2</option>
            <option value="3.0">3.0</option>
            <option value="4.0">4.0</option>
            <option value="4.1">4.1</option>
            <option value="4.2">4.2</option>
          </select></div>
          <div class="singleinput"> NFC: Sí <input type="radio" name="nfc" value="1"> No <input type="radio" name="nfc" value="0"></div>
          <div class="singleinput"> Infrarrojo: Sí <input type="radio" name="infrared" value="1"> No <input type="radio" name="infrared" value="0"></div>
          <div class="singleinput"> GPS: Sí <input type="radio" name="gps" value="1"> No <input type="radio" name="gps" value="0"></div>
          <div class="singleinput"> Tecnologías GPS: <input type="text" name="gps_tech"> Ej.: GLONASS, A-GPS</div>
          <div class="singleinput"> Radio FM: Sí <input type="radio" name="fmradio" value="1"> No <input type="radio" name="fmradio" value="0"></div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Sistema Operativo y CPU/GPU</label>
        </div>
        <div class="inputs">
          <div class="singleinput"> Sistema Operativo: <input type="text" name="os"> Ej.: Android 4.4.4 actualizable a 5.0 </div>
          <div class="singleinput"> Procesador: <input type="text" name="cpu"> Ej.: Qualcomm Snapdragon 805 </div>
          <div class="singleinput"> Nucleos: <input type="number" name="cores"></div>
          <div class="singleinput"> Frecuencia: <input type="number" name="frequency" step="0.1"> GHz.</div>
          <div class="singleinput"> GPU: <input type="text" name="gpu"> Ej.: PowerVR2354</div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Cámara</label>
        </div>
        <div class="inputs">
          <div class="singleinput"> Cámara trasera: Sí <input type="radio" name="back_cam" value="1"> No <input type="radio" name="back_cam" value="0"></div>
          <div class="singleinput"> Cantidad de Megapixeles: <input type="number" name="back_cam_mp" step="0.1"></div>
          <div class="singleinput"> Resolución: <input type="text" name="back_cam_res"> Ej.: 1440x2560</div>
          <div class="singleinput"> Sistema de enfoque: <input type="text" name="back_cam_focus"></div>
          <div class="singleinput"> Flash: Sí <input type="radio" name="back_cam_flash" value="1"> No <input type="radio" name="back_cam_flash" value="0"></div>
          <div class="singleinput"> Tecnología Flash: <input type="text" name="back_cam_flash_tech"></div>
          <div class="singleinput"> Grabación a 480p: Sí <input type="radio" name="back_cam_480p" value="1"> No <input type="radio" name="back_cam_480p" value="0"></div>
          <div class="singleinput"> Cuadros por segundo a 480p: <input type="number" name="back_cam_480p_fps"></div>
          <div class="singleinput"> Grabación a 720p: Sí <input type="radio" name="back_cam_720p" value="1"> No <input type="radio" name="back_cam_720p" value="0"></div>
          <div class="singleinput"> Cuadros por segundo a 720p: <input type="number" name="back_cam_720p_fps"></div>
          <div class="singleinput"> Grabación a 1080p: Sí <input type="radio" name="back_cam_1080p" value="1"> No <input type="radio" name="back_cam_1080p" value="0"></div>
          <div class="singleinput"> Cuadros por segundo a 1080p: <input type="number" name="back_cam_1080p_fps"></div>
          <div class="singleinput"> Grabación a 2.4k: Sí <input type="radio" name="back_cam_24k" value="1"> No <input type="radio" name="back_cam_24k" value="0"></div>
          <div class="singleinput"> Cuadros por segundo a 2.4K: <input type="number" name="back_cam_24k_fps"></div>
          <div class="singleinput"> Grabación a 4k: Sí <input type="radio" name="back_cam_4k" value="1"> No <input type="radio" name="back_cam_4k" value="0"></div>
          <div class="singleinput"> Cuadros por segundo a 4k: <input type="number" name="back_cam_4k_fps"></div>
          <div class="singleinput"> Opciones cámara trasera: <input type="text" name="back_cam_feat"></div>
          <div class="singleinput"> Cámara frontal: Sí <input type="radio" name="front_cam" value="1"> No <input type="radio" name="front_cam" value="0"></div>
          <div class="singleinput"> Cantidad de Megapixeles: <input type="number" name="front_cam_mp" step="0.1"></div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Conexiones y sensores/features</label>
        </div>
        <div class="inputs">
          <div class="singleinput"> Puerto MicroSD: Sí <input type="radio" name="msd_slot" value="1"> No <input type="radio" name="msd_slot" value="0"></div>
          <div class="singleinput"> Conector de audio 3.5mm: Sí <input type="radio" name="a35mmjack" value="1"> No <input type="radio" name="a35mmjack" value="0"></div>
          <div class="singleinput"> Acelerómetro: Sí <input type="radio" name="accelerometer" value="1"> No <input type="radio" name="accelerometer" value="0"></div>
          <div class="singleinput"> Giroscopio: Sí <input type="radio" name="gyro" value="1"> No <input type="radio" name="gyro" value="0"></div>
          <div class="singleinput"> Compás: Sí <input type="radio" name="compass" value="1"> No <input type="radio" name="compass" value="0"></div>
          <div class="singleinput"> Barómetro: Sí <input type="radio" name="barometer" value="1"> No <input type="radio" name="barometer" value="0"></div>
          <div class="singleinput"> Proximidad: Sí <input type="radio" name="proxi" value="1"> No <input type="radio" name="proxi" value="0"></div>
          <div class="singleinput"> SMS: Sí <input type="radio" name="sms" value="1"> No <input type="radio" name="sms" value="0"></div>
          <div class="singleinput"> MMS: Sí <input type="radio" name="mms" value="1"> No <input type="radio" name="mms" value="0"></div>
          <div class="singleinput"> Email: Sí <input type="radio" name="email" value="1"> No <input type="radio" name="email" value="0"></div>
          <div class="singleinput"> Navegación Web: Sí <input type="radio" name="webnav" value="1"> No <input type="radio" name="webnav" value="0"></div>
          <div class="singleinput"> tecnología navegación Web: <input type="text" name="webnav_tech"> Ej.: HTML5, Safari.</div>
          <div class="singleinput"> Java: Sí <input type="radio" name="ajava" value="1"> No <input type="radio" name="ajava" value="0"></div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Batería y cargado</label>
        </div>
        <div class="inputs">
          <div class="singleinput"> Conexión de carga: <input type="text" name="datacharge"></div>
          <div class="singleinput"> Capacidad de bateria: <input type="number" name="battery_cap"> mAh.</div>
          <div class="singleinput"> Tecnología de la batería: <select name="battery_tech">
            <option value="Li-Po">Li-Po</option>
            <option value="Li-Ion">Li-Ion</option>
            <option value="NiCd">NiCd</option>
            <option value="NiMH">NiMH</option>
          </select></div>
          <div class="singleinput"> Removible: Sí <input type="radio" name="battery_remove" value="1"> No <input type="radio" name="battery_remove" value="0"></div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Colores disponibles</label>
        </div>
        <div class="inputs">
          <div class="singleinput"> Colores: <input type="text" name="design_colors"> Ej.: Space Gray, Verde, Rojo, Dorado</div>
        </div>
      </div>
      <div class="seccion">
        <div class="tituloseccion">
          <label>Otros</label>
        </div>
        <div class="inputs">
          <div class="singleinput"><textarea rows="10" name="others"></textarea> Agregar en líneas separadas, iniciando con un guión (-)</div>
        </div>
      </div>
      <p><input type="submit" name="submit" value="Guardar"></p>
  </form>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
        $(function() {
            $('form').bind('submit', function(){
                $.ajax({
                    type: 'post',
                    url: "http://pisapapeles.net/SQLsearcher/submit.php",
                    data: $("form").serialize(),
                    success: function() {
                        alert("Datos agregados con éxito");
                    }
                });
                return false;
            });
        });
    </script>

</body>
</html>
