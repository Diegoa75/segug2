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
</div>


<div class="contenedor"> 
	<img src="./imagenes/seguridad-inteligente.jpg"
	width="800" height="388"/>

	<div class="formuingreso">
		<form action= "organizador.php" method="post">
			Usuario &nbsp;&nbsp&nbsp;&nbsp;
			<input type="text" id="campo" name="login" value="" size="20"/>
			<br><br>
			Contraseña
			<input type="password" name="clave" value="" size="20"/>
			<br><br>&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;			
			<input type="submit" value="Ingresar" class="boton"/>
			<input type="reset" name="limpiar" value="Reset" class="boton"/>
		</form>
			<div class="fondoformulario"><img src="./imagenes/datos-seguros.jpg"
						width="340" height="190"/>
			</div>
	</div>
			
	
</div>
<div class="pie_de_pagina"><br><br><br> SEGURILANDIA S.A.</div>
</body>

</html>
	