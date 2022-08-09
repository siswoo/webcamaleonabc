<?php
session_start();
include('script/conexion.php');

$sql1 = "SELECT id,telefono FROM `formulario_contacto1` GROUP BY telefono HAVING COUNT(*)>1";
$proceso1 = mysqli_query($conexion,$sql1);
while($row1=mysqli_fetch_array($proceso1)){
	$id = $row1["id"];
	$telefono = $row1["telefono"];
	$sql2 = "DELETE FROM formulario_contacto1 WHERE telefono = '$telefono' and id != $id";
	$proceso2 = mysqli_query($conexion,$sql2);
}
?>