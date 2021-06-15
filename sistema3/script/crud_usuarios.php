<?php
include('conexion.php');
$condicion = $_POST["condicion"];
$datetime = date('Y-m-d H:i:s');

if($condicion=='login1'){
	$usuario = $_POST['usuario'];
	$clave = md5($_POST["clave"]);
	$estatus = $_POST['estatus'];

	if($estatus=='Pasantia'){
		$sql1 = "SELECT * FROM usuarios WHERE correo_empresa = '".$usuario."' and clave = '".$clave."' and estatus_pasantia = 1 LIMIT 1";
	}else if($estatus=='Modelo'){
		$sql1 = "SELECT * FROM usuarios WHERE correo_personal = '".$usuario."' and clave = '".$clave."' and estatus_modelo = 1 LIMIT 1";
	}else if($estatus=='Nomina'){
		$sql1 = "SELECT * FROM usuarios WHERE correo_empresa = '".$usuario."' and clave = '".$clave."' and estatus_nomina = 1 LIMIT 1";
	}else if($estatus=='Satelite'){
		$sql1 = "SELECT * FROM usuarios WHERE correo_personal = '".$usuario."' and clave = '".$clave."' and estatus_satelite = 1 LIMIT 1";
	}else if($estatus=='Empresa'){
		$sql1 = "SELECT * FROM usuarios WHERE correo_personal = '".$usuario."' and clave = '".$clave."' and estatus_empresa = 1 LIMIT 1";
	}

	$proceso1 = mysqli_query($conexion,$sql1);
	$contador1 = mysqli_num_rows($proceso1);

	if($contador1>=1){
		while($row1 = mysqli_fetch_array($proceso1)) {
			$usuario_id=$row1['id'];
			session_start();
			$_SESSION["id"]=$usuario_id;
			$_SESSION["estatus"]=$estatus;

			$datos = [
				"sql1" => $sql1,
				"usuario_id"	=> $usuario_id,
				"estatus" 		=> $estatus,
			];
		}
		echo json_encode($datos);
	}else{
		$datos = [
			"sql1" => $sql1,
			"estatus"	=> "sin resultados",
		];
		echo json_encode($datos);
	}
}

if($condicion=='consultar_pasantes1'){
	$id = $_POST['id'];
	$sql1 = "SELECT * FROM usuarios WHERE id = ".$id;
	$proceso1 = mysqli_query($conexion,$sql1);
	while($row1 = mysqli_fetch_array($proceso1)) {
		$nombre1 = $row1["nombre1"];
		$nombre2 = $row1["nombre2"];
		$apellido1 = $row1["apellido1"];
		$apellido2 = $row1["apellido2"];
		$documento_tipo = $row1["documento_tipo"];
		$documento_numero = $row1["documento_numero"];
		$correo_personal = $row1["correo_personal"];
		$telefono = $row1["telefono"];
		$genero = $row1["genero"];
		$direccion = $row1["direccion"];
	}

	$sql2 = "SELECT * FROM datos_pasantes WHERE id_usuarios = ".$id;
	$proceso2 = mysqli_query($conexion,$sql2);
	while($row2 = mysqli_fetch_array($proceso2)) {
		$sede = $row2["sede"];
		$estatus = $row2["estatus"];
		$turno = $row2["turno"];
	}

	$datos = [
		"sql1" 				=> $sql1,
		"estatus"			=> $estatus,
		"nombre1"			=> $nombre1,
		"nombre2"			=> $nombre2,
		"apellido1"			=> $apellido1,
		"apellido2"			=> $apellido2,
		"documento_tipo"	=> $documento_tipo,
		"documento_numero"	=> $documento_numero,
		"correo_personal"	=> $correo_personal,
		"telefono"			=> $telefono,
		"genero"			=> $genero,
		"direccion"			=> $direccion,
		"sede"				=> $sede,
	];
	echo json_encode($datos);

}

if($condicion=='peticion_pasantes1'){
	$id = $_POST['id'];
	$sql1 = "SELECT * FROM datos_pasantes WHERE id_usuarios = ".$id;
	$proceso1 = mysqli_query($conexion,$sql1);
	while($row1 = mysqli_fetch_array($proceso1)) {
		$sede = $row1["sede"];
		$estatus = $row1["estatus"];
		$turno = $row1["turno"];
	}

	$datos = [
		"sede" 		=> $sede,
		"estatus"	=> $estatus,
		"turno"	 	=> $turno,
	];
	echo json_encode($datos);

}

if($condicion=='editar_pasantes1'){
	$id = $_POST['id'];
	$sql1 = "SELECT * FROM datos_pasantes WHERE id_usuarios = ".$id;
	$proceso1 = mysqli_query($conexion,$sql1);
	while($row1 = mysqli_fetch_array($proceso1)) {
		$estatus = $row1["estatus"];
	}

	if($estatus==1){
		$nombre1 = $_POST['nombre1'];
		$nombre2 = $_POST['nombre2'];
		$apellido1 = $_POST['apellido1'];
		$apellido2 = $_POST['apellido2'];
		$documento_tipo = $_POST['documento_tipo'];
		$documento_numero = $_POST['documento_numero'];
		$correo_personal = $_POST['correo_personal'];
		$telefono = $_POST['telefono'];
		$genero = $_POST['genero'];
		$sede = $_POST['sede'];
		
		$sql2 = "UPDATE usuarios SET nombre1 = '$nombre1', nombre2 = '$nombre2', apellido1 = '$apellido1', apellido2 = '$apellido2', documento_tipo = '$documento_tipo', documento_numero = '$documento_numero', correo_personal = '$correo_personal', telefono = '$telefono', genero = '$genero' WHERE id = ".$id;
		$proceso2 = mysqli_query($conexion,$sql2);

		$sql3 = "UPDATE datos_pasantes SET sede = '$sede' WHERE id_usuarios = ".$id;
		$proceso3 = mysqli_query($conexion,$sql3);

		$sql4 = "SELECT * FROM sedes WHERE id = ".$sede;
		$proceso4 = mysqli_query($conexion,$sql4);
		while($row4 = mysqli_fetch_array($proceso4)) {
			$sede_nombre = $row4["nombre"];
		}

		$sql5 = "SELECT * FROM documento_tipo WHERE id = ".$documento_tipo;
		$proceso5 = mysqli_query($conexion,$sql5);
		while($row5 = mysqli_fetch_array($proceso5)) {
			$documento_tipo_nombre = $row5["nombre"];
		}

		$datos = [
			"estatus" => 1,
			"documento_tipo" => $documento_tipo_nombre,
			"documento_numero" => $documento_numero,
			"nombres" => $nombre1." ".$nombre2,
			"apellidos" => $apellido1." ".$apellido2,
			"genero" => $genero,
			"correo_personal" => $correo_personal,
			"telefono" => $telefono,
			"sede" => $sede_nombre,
		];
		echo json_encode($datos);
	}else{
		$datos = [
			"estatus" => 0,
		];
		echo json_encode($datos);
	}

}




?>