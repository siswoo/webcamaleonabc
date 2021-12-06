<?php
include('conexion.php');

$sql1 = "SELECT id,telefono FROM wix WHERE hablame = 1 GROUP BY telefono";
$consulta1 = mysqli_query($conexion,$sql1);
while($row1 = mysqli_fetch_array($consulta1)) {
	$id = $row1['id'];
	$sql2 = "DELETE FROM wix WHERE id = ".$id;
	$consulta2 = mysqli_query($conexion,$sql2);
}

$sql3 = "SELECT id,telefono FROM wix WHERE hablame = 1 ORDER BY id ASC";
$consulta3 = mysqli_query($conexion,$sql3);
while($row3 = mysqli_fetch_array($consulta3)) {
	$id = $row3['id'];
	$telefono = $row3['telefono'];

	$telefono = str_replace(' ','',$telefono);
	$cantidad = strlen($telefono);

	if($cantidad!=10){
		$sql4 = "DELETE FROM wix WHERE id = ".$id;
		$consulta4 = mysqli_query($conexion,$sql4);
	}
}


?>