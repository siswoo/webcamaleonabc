<?php
include("conexion.php");
include("conexion2.php");
include("../js/funciones1.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../resources/PHPMailer/PHPMailer/src/Exception.php';
require '../resources/PHPMailer/PHPMailer/src/PHPMailer.php';
require '../resources/PHPMailer/PHPMailer/src/SMTP.php';

$condicion = $_POST["condicion1"];
$fecha_creacion = date('Y-m-d');

if($condicion=='contacto1'){
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$edad = $_POST["edad"];
	$mensaje = $_POST["mensaje"];

	$codigo_pais = '57';
	
	$sql1 = "INSERT INTO formulario_contacto1 (nombre,correo,telefono,edad,mensaje,fecha_creacion) VALUES ('$nombre','$correo','$telefono','$edad','$mensaje','$fecha_creacion')";
	$proceso1 = mysqli_query($conexion,$sql1);

	/*****************APARTADO DE WHATSAPP************/
	
$msg = "Hola, Bienvenid@ a Camaleón 🦎,
Espero que te encuentres muy bien.

Es un gusto saludarte, mi nombre es Gabriela.

En este Link podrás seguir tu proceso vía WhatsApp para ser parte de nuestra familia.

Bienvenid@ a ✨ CAMALEÓN MODELS GROUP ✨
https://api.whatsapp.com/send?phone=573174922224&text=Hola%20muy%20Amables%20Solicito%20Informaci%C3%B3n%20
 
¡Es Tiempo de la revolución digital! ¡Transforma tu Vida al lado de una Compañía de Profesionales!

Quedo atenta a tus comentarios, 

Cordialmente,
Community Manager Camaleón Models Group,";

	$phone = $codigo_pais.$telefono;
	$result = sendMessage($phone,$msg);

	if($result !== false){
		if($result->sent == 1){}else{}
	}else{
		var_dump($result);
	}
	
	/***************************************************/

	/***************APARTADO DE CORREO*****************/
	$mail = new PHPMailer;
	$mail->isSMTP();
	//$mail->SMTPDebug = 2;  //con el 2 se muestra todo desglozado
	$mail->CharSet = "UTF-8";
	$mail->Host = 'mail.camaleonmg.com';
	$mail->Port = 587;
	$mail->SMTPAuth = true;
	$mail->Username = 'noreply@camaleonmg.com';
	$mail->Password = 'juanmaldonado123';
	$mail->setFrom('noreply@camaleonmg.com', 'Camaleon Models');
	$mail->addAddress('juanmaldonado.co@gmail.com', '');
	$mail->Subject = 'Mensaje Automático';
	$mail->Body = '
Hola, Bienvenid@ a Camaleón 🦎,
Espero que te encuentres muy bien.

Es un gusto saludarte, mi nombre es Gabriela.

En este Link podrás seguir tu proceso vía WhatsApp para ser parte de nuestra familia.

Bienvenid@ a ✨ CAMALEÓN MODELS GROUP ✨
https://api.whatsapp.com/send?phone=573174922224&text=Hola%20muy%20Amables%20Solicito%20Informaci%C3%B3n%20
 
¡Es Tiempo de la revolución digital! ¡Transforma tu Vida al lado de una Compañía de Profesionales!

Quedo atenta a tus comentarios, 

Cordialmente,
Community Manager Camaleón Models Group';

	if (!$mail->send()) {
		//echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		//echo 'The email message was sent.';
	}
	/**************************************************/

	$datos = [
		"estatus" => 'ok',
		"sql" => $sql1,
	];

	echo json_encode($datos);
}

?>