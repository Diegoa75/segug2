<?php
// Direcciona el encabezado desde la raiz
$documentroot = $_SERVER["DOCUMENT_ROOT"];
include("".$documentroot."/segurilandia/include/header.php");
?>
<body>
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


<div class="contenedor"> 
	<img src="./imagenes/seguridad-inteligente.jpg"
	width="800" height="388"/>

	<div class="formuingreso">
		<form action= "organizador.php" method="post">
			Usuario &nbsp;&nbsp&nbsp;&nbsp;
			<input type="text" id="campo" name="id" value="" size="20"/>
			<br><br>
			Contraseņa
			<input type="password" name="rol" value="" size="20"/>
			<br><br>&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;			
			<input type="submit" value="Ingresar" class="boton"/>
			<input type="reset" name="limpiar" value="Reset" class="boton"/>
		</form>
			<div class="fondoformulario"><img src="./imagenes/datos-seguros.jpg"
						width="340" height="190"/>
			</div>
	</div>
			
	
</div>
<div class="pie_de_pagina"><br><br><br><div class="nombre"> SEGURILANDIA S.A. </div>Florencio Varela 1970&nbsp; San Justo&nbsp;&nbsp;&nbsp;&nbsp;Tel. 4123-4567&nbsp;&nbsp;&nbsp;&nbsp; www.segurilandia.com&nbsp;&nbsp;</div>
</body>

</html>
	