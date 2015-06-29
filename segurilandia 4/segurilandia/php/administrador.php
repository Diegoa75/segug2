<?php
$documentroot = $_SERVER["DOCUMENT_ROOT"];
include("".$documentroot."/segurilandia/include/header.php");
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
	<li class="nivel1"><a href="#" class="nivel1"><br>Inicio</a>
	
  </li>
  <li class="nivel1"><a href="#" class="nivel1"><br>Cliente</a>
	<ul>
		<li><a href="altacliente.php">Alta</a></li>
		<li><a href="modificacliente.php">Modificacion</a></li>
		<li><a href="bajacliente.php">Baja</a></li>
	</ul>
  </li>
  <li class="nivel1"><a href="#" class="nivel1"><br>Historial</a>
	<ul>
		<li><a href="#">Alarma</a></li>
		<li><a href="#">Eventos</a></li>		
	</ul>
</li>
  <li class="nivel1"><a href="#" class="nivel1"><br>Reportes graficos</a>
	<ul>
		<li><a href="#">Clientes por zona</a></li>
		<li><a href="#">Alarmas disparadas</a></li>
	</ul>
</li>
</ul>
</div>
</div>
<div class="contenedor2">
	<br><br>	
	 Bienvenido administrador <br><br>
	 Nro Nombre<br> <br>
<?php	
$host='localhost';
$user='root';
$pass='';
$conexion=mysql_connect($host,$user,$pass);
$sql="CREATE DATABASE IF NOT EXISTS prueba2";

$inseltar=mysql_query($sql,$conexion);
/*if(!$inseltar){
    echo 'Error al crear la base de datos<br />';
    }else{
        echo 'Base de datos creada exitosamente<br />.';
      }*/
      
      $seleccion_base =mysql_select_db('prueba2',$conexion);
		/*if($seleccion_base==FALSE)
		{
		
		echo 'Error al seleccionar la base<br />.';
		} else{
				echo 'Base seleccionada exitosamente<br />.';
       
       }*/
	$consulta= mysql_query("select * from cliente",$conexion)   or die ("Fallo en la consulta");

while($fila=mysql_fetch_array($consulta))
{
echo $fila ['id'];
echo " ".$fila ['nombre'];
echo "<br>";
}  
?>

<!--<div class="formubaja">
<form action= "eliminacli.php" method="post">
			Cliente a eliminar &nbsp;&nbsp&nbsp;&nbsp;
			<input type="text" id="campo" name="id" value="" size="20"/>
			<br><br>
						
			<input type="submit" value="Borrar" class="boton"/>
			<input type="reset" name="limpiar" value="Reset" class="boton"/>
		</form>
</div>-->	

	<form action= "logoutb.php" method="post"><br>
	<input type="submit" value="Salir" class="boton"/>
	</form>
</div>
<div class="pie_de_pagina"><br><br><br> SEGURILANDIA S.A.</div>
</body>
	</html>