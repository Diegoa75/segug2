<?php
// Direcciona el encabezado desde la raiz
$documentroot = $_SERVER["DOCUMENT_ROOT"];
include("".$documentroot."/segurilandia/include/header.php");
?>
<?php
session_start();
if($_SESSION['log']!=1)
header("location:index2.php");
//echo session_id();
?>
<html>
<div class="cabecera"> 
	<div class="logo">
		<img src="./imagenes/logo2.jpg"
		width="340" height="190"/>
	</div> 
	<div class="redes">
		<img src="./imagenes/logo_face.png"
		width="30" height="32"/>
		<img src="./imagenes/logo_twitter.png"
		width="30" height="32"/>
		
	</div> 
	
</div>

<body>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es&callback=iniciar"></script>

<script>
function iniciar() {
var mapOptions = {
center: new google.maps.LatLng(-34.670671534, -58.562600613),
zoom: 15,
mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("map"),mapOptions);	

var place = new google.maps.LatLng(-34.670671534,-58.562600613);
var marker = new google.maps.Marker({
        position: place
        , title: 'Universidad de la Matanza'
        , map: map
        , });
//marcador en el centro del mapa
var place2 = new google.maps.LatLng(-34.670389172,-58.567149639);
var marker2 = new google.maps.Marker({
        position: place2
        , title: 'Hospital Italiano'
        , map: map
        /*, icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/green/blank.png'*/
		,icon:'imagenes/verdepunto.png'});

}
	
</script>
<div class="contenedor_menu">
<div id="menu">
<ul>
  <li class="nivel1"><a href="#" class="nivel1"><br>Persona</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 1<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="#">Alta</a></li>
		<li><a href="#">Modificacion</a></li>
		<li><a href="#">Baja</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
  </li>
  <li class="nivel1"><a href="#" class="nivel1"><br>Historial</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 2<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="#">Alarma</a></li>
		<li><a href="#">Eventos</a></li>		
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
  <li class="nivel1"><a href="#" class="nivel1"><br>Reportes graficos</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 3<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="#">Clientes por zona</a></li>
		<li><a href="#">Alarmas disparadas</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
</ul>
</div>
</div>
<div class="contenedor2">
		
	 Bienvenido monitor
	 <form action= "logoutb.php" method="post"><br>
	<input type="submit" value="Salir" class="boton"/>
	</form>
	
	<div id="map"></div>
	
	
</div>
<div class="pie_de_pagina"><br><br><br><div class="nombre"> SEGURILANDIA S.A. </div>Florencio Varela 1970&nbsp; San Justo&nbsp;&nbsp;&nbsp;&nbsp;Tel. 4123-4567&nbsp;&nbsp;&nbsp;&nbsp; www.segurilandia.com&nbsp;&nbsp;</div>
</body>
	</html>