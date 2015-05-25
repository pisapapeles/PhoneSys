<!doctype html>
<html>
<?php
  //Conecta al servidor:
  mysql_connect("localhost", "rapaig_sqltest", "sqltest") or die (mysql_error ());
  //Conecta a la base de datos:
  mysql_select_db("rapaig_sqlsearcher") or die(mysql_error());
  //Selecciona la ID desde la tabla phones:
  $strSQL = "SELECT * FROM phones WHERE visible = 1";
  //Transforma el query en una variable:
  $result = mysql_query($strSQL);
  $rowcount=mysql_num_rows($result);
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0">
  <title>Inicio</title>
  <link href="http://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/standardize.css">
  <link rel="stylesheet" href="css/index-grid.css">
  <link rel="stylesheet" href="css/index.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
    $.ajax({
    type: "POST",
    url: "search.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
    $("#result").html(html).show();
    }
    });
}return false;    
});

jQuery("#result").live("click",function(e){ 
    var $clicked = $(e.target);
    var $name = $clicked.find('.name').html();
    var decoded = $("<div/>").html($name).text();
    $('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
    var $clicked = $(e.target);
    if (! $clicked.hasClass("search")){
    jQuery("#result").fadeOut(); 
    }
});
$('#searchid').click(function(){
    jQuery("#result").fadeIn();
});
});
</script>
</head>
<body class="body page-index clearfix">
  <div class="header">
    <div class="headercont">
      <img class="logo" src="images/ps.png">
    </div>
  </div>
  <div class="site">
    <div class="menubar clearfix">
      <button class="blog">BLOG</button>
      <div class="searchbox">
        <input id="searchid" class="search" placeholder="Buscar teléfono" type="text">
        <div id="result" class="_element"></div>
      </div>
    </div>
    <div class="content clearfix">
      <button onClick="window.location='list.php';" class="list">
        <p>Lista de telefonos</p>
        <p>Hay: <?php echo $rowcount ?> telefonos</p>
      </button>
      <button class="compare">
        <p>Comparador</p>
        <p>Estas comparando X telefonos</p>
      </button>
      <button class="ssearch">
        <p>Buscador simple:</p>
        <p>Escoge tu smartphone con simples preguntas</p>
      </button>
      <button class="csearch">
        <p>Buscador completo:</p>
        <p>Para los mas entendidos</p>
      </button>
    </div>
  </div>
  <div class="footercont">
    <div class="footer clearfix">
      <div class="footermargin">
        <p class="fottertext">©Pisapapeles Networks 2015. Hecho con ♥ en Chile.</p>
      </div>
    </div>
  </div>

  <script src="js/jquery-min.js"></script>
  <script src="js/rimages.js"></script>
</body>
</html>