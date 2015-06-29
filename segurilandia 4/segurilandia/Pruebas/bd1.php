<?php

$host='localhost';
$user='root';
$pass='';
$conexion=mysql_connect($host,$user,$pass);
$sql="CREATE DATABASE IF NOT EXISTS prueba";

$inseltar=mysql_query($sql,$conexion);
if(!$inseltar){
    echo 'Error al crear la base de datos<br />';
    }else{
        echo 'Base de datos creada exitosamente<br />.';
      }
      
      $seleccion_base =mysql_select_db('prueba',$conexion);
		if($seleccion_base==FALSE)
		{
		
		echo 'Error al seleccionar la base<br />.';
		} else{
				echo 'Base seleccionada exitosamente<br />.';
       
       }
	$consulta= mysql_query("select * from usuario",$conexion)   or die ("Fallo en la consulta");
//1er fila
//$fila = mysql_fetch_array($consulta);
//avanza 1 fila
//$fila2 = mysql_fetch_array($consulta);//

while($fila=mysql_fetch_array($consulta))
{
echo $fila ['id'];
echo " ".$fila ['rol'];
echo "<br>";
}  
?> 