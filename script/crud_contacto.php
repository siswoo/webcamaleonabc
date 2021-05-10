<?php
include("conexion.php");
$condicion = $_POST["condicion1"];
$fecha_creacion = date('Y-m-d');

if($condicion=='contacto1'){
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$edad = $_POST["edad"];
	$mensaje = $_POST["mensaje"];
	
	$sql1 = "INSERT INTO formulario_contacto1 (nombre,correo,telefono,edad,mensaje,fecha_creacion) VALUES ('$nombre','$correo','$telefono','$edad','$mensaje','$fecha_creacion')";
	$proceso1 = mysqli_query($conexion,$sql1);

	$datos = [
		"estatus" => 'ok',
		"sql" => $sql1,
	];

	echo json_encode($datos);
}

?>