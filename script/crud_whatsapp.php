<?php
@session_start();
include('conexion.php');
include('conexion2.php');
$condicion = $_POST["condicion"];
$datetime = date('Y-m-d H:i:s');
$fecha_creacion = date('Y-m-d');
$hora_creacion = date('H:i:s');

if($condicion=='actualizar1'){
	$token = $_POST['token'];
	$url = $_POST['url'];

	$sql1 = "UPDATE apiwhatsapp SET token = '".$token."', url = '".$url."', fecha_creacion = '".$fecha_creacion."', hora_creacion = '".$hora_creacion."'";
	$proceso1 = mysqli_query($conexion,$sql1);

	$datos = [
		"estatus" => "ok",
	];
	echo json_encode($datos);
}

if($condicion=='actualizar1'){
	$token = $_POST['token'];
	$url = $_POST['url'];

	$sql1 = "UPDATE apiwhatsapp SET token = '".$token."', url = '".$url."', fecha_creacion = '".$fecha_creacion."', hora_creacion = '".$hora_creacion."'";
	//$proceso1 = mysqli_query($conexion,$sql1);

	$datos = [
		"estatus" => "ok",
	];
	echo json_encode($datos);
}

if($condicion=='consultar1'){
	$opcion1 = '';
	$opcion2 = '';

	$sql1 = "SELECT * FROM numeros_whatsapp";
	$proceso1 = mysqli_query($conexion,$sql1);
	while($row1 = mysqli_fetch_array($proceso1)) {
		$ambiente = $row1["ambiente"];
		$numero = $row1["numero"];
		if($ambiente=='webcamaleonabc_opcion1'){
			$opcion1 = $numero;
		}else if($ambiente=='webcamaleonabc_opcion2'){
			$opcion2 = $numero;
		}
	}

	$datos = [
		"estatus" => "ok",
		"opcion1" => $opcion1,
		"opcion2" => $opcion2,
	];
	echo json_encode($datos);
}

if($condicion=='actualizar2'){
	$opcion1 = $_POST["opcion1"];
	$opcion2 = $_POST["opcion2"];

	$sql1 = "SELECT * FROM numeros_whatsapp WHERE ambiente = 'webcamaleonabc_opcion1'";
	$proceso1 = mysqli_query($conexion,$sql1);
	$contador1 = mysqli_num_rows($proceso1);
	if($contador1>=1){
		$sql2 = "UPDATE numeros_whatsapp SET numero = '$opcion1' WHERE ambiente = 'webcamaleonabc_opcion1'";
		$proceso2 = mysqli_query($conexion,$sql2);
	}else{
		$sql3 = "INSERT INTO numeros_whatsapp (numero,ambiente,fecha_creacion) VALUES ('$opcion1','webcamaleonabc_opcion1','$fecha_creacion')";
		$proceso3 = mysqli_query($conexion,$sql3);
	}

	$sql4 = "SELECT * FROM numeros_whatsapp WHERE ambiente = 'webcamaleonabc_opcion2'";
	$proceso4 = mysqli_query($conexion,$sql4);
	$contador4 = mysqli_num_rows($proceso4);
	if($contador4>=1){
		$sql5 = "UPDATE numeros_whatsapp SET numero = '$opcion2' WHERE ambiente = 'webcamaleonabc_opcion2'";
		$proceso5 = mysqli_query($conexion,$sql5);
	}else{
		$sql6 = "INSERT INTO numeros_whatsapp (numero,ambiente,fecha_creacion) VALUES ('$opcion2','webcamaleonabc_opcion2','$fecha_creacion')";
		$proceso6 = mysqli_query($conexion,$sql6);
	}

	$datos = [
		"estatus" => "ok",
		"opcion1" => $opcion1,
		"opcion2" => $opcion2,
		"msg" => "Actualizado exitosamente",
	];
	echo json_encode($datos);
}

?>