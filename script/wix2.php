<?php
include("conexion.php");
include("conexion2.php");

$contadorg1 = 0;
$sql1 = "SELECT * FROM wix";
$proceso1 = mysqli_query($conexion,$sql1);
while($row1 = mysqli_fetch_array($proceso1)) {
	$id = $row1["id"];
	$telefono = $row1["telefono"];
	$cantidad = strlen($telefono);
	if($cantidad==10){}else{
		$sql2 = "DELETE FROM wix WHERE id = ".$id;
		$proceso2 = mysqli_query($conexion,$sql2);
		$contadorg1 = $contadorg1+1;
	}
}

echo 'En total se eliminaron: '.$contadorg1.' Registros con teléfonos incorrectos.';

?>