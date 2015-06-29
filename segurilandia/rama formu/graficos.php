<?php
//INVOCO LA LIBRERIA GENERICA DE JGRAPH Y LA LIBRERIA PARA EL GRAFICO DE BARRAS
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');

//LLAMO A LA FUNCION PARA CONECTARME A LA BASE DE DATOS
require("connect_db.php")

//
$sql="SELECT * FROM factura";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
//AGREGO LOS DATOS AL ARRAY
$datos[]=$row['id_adminitrador'];
$label[]=$row['importe'];
}

//DEFINO FORMATO GENERAL
$grafico = new Graph(500, 400, 'auto');
$grafico -> setscale ("textint");
$grafico -> title -> set ("Ejemplo de Grafico");
$grafico -> xaxis -> title ->set ("ID");
$grafico -> xaxis -> setTickLabels ($labels);
$grafico -> yaxis -> title -> Set ("Cantidad de Aberturas");

//INGRESO DATOS AL ARREGLO QUE VAN EN EL GRAFICO
$barplot1 = new BarPlot ($datos);

$barplot1 -> SetFillGradiant ("#BE81F7", "E3CEF6", GRAD_HOR);
$barplot1 -> SetWidth (30);
$grafico -> add $barplot1;
$grafico -> Stroke();
$grafico -> Stroke("IM.PNG");


?>