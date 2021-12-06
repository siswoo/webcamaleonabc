<?php
include('conexion.php');
$telefono_old = '';

$sql1 = "SELECT id,telefono FROM formulario_contacto1 ORDER BY telefono ASC";
$consulta1 = mysqli_query($conexion,$sql1);
while($row1 = mysqli_fetch_array($consulta1)) {
	$id = $row1['id'];
	$telefono = $row1['telefono'];

	if($telefono==$telefono_old){
		$sql2 = "DELETE FROM formulario_contacto1 WHERE id = ".$id;
		$consulta2 = mysqli_query($conexion,$sql2);
		echo "id = ".$id." | telefono = ".$telefono."<br>";
	}else{
		$telefono_old = $telefono;
	}
}

?>