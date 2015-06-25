<?php
// Direcciona el encabezado desde la raiz
$documentroot = $_SERVER["DOCUMENT_ROOT"];
include("".$documentroot."/segurilandia/include/header2.php");
?>
<?php
session_start();
if($_SESSION['log']!=1)
header("location:index2.php");
echo session_id();
?>
<html>
<div class="cabecera"> 
	<div class="logo">
		<img src="./imagenes/logo2.jpg"
		width="340" height="190"/>
	</div> 
</div>

<body>
<div class="contenedor_menu">
<div id="menu">
<ul>
  <li class="nivel1"><a href="#" class="nivel1"><br>Imprimir</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 1<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="#">Codigo QR</a></li>
		<li><a href="#">Factura</a></li>		
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
  </li>
  <li class="nivel1"><a href="#" class="nivel1"><br>Alarma</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 2<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="#">Activar</a></li>
		<li><a href="#">Desactivar</a></li>		
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
  <li class="nivel1"><a href="#" class="nivel1"><br>911</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 3<table class="falsa"><tr><td><![endif]-->
	
</li>
</ul>
</div>
</div>
<div class="contenedor2">
	<br><br>	
	<h1> Bienvenido cliente</h1>
	
	<div class="mapa" style="width:500px;height:250px;"></div>
	
	<form action= "logoutb.php" method="post"><br>
	<input type="submit" value="Salir" class="boton"/>
	</form>
</div>
<div class="pie_de_pagina"><br><br><br> SEGURILANDIA S.A.</div>
</body>
	</html>