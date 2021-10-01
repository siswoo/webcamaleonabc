<?php
include("conexion.php");
include("conexion2.php");
include("../js/funciones1.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../resources/PHPMailer/PHPMailer/src/Exception.php';
require '../resources/PHPMailer/PHPMailer/src/PHPMailer.php';
require '../resources/PHPMailer/PHPMailer/src/SMTP.php';

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
	$mail->addAddress("juanmaldonado.co@gmail.com", '');
	$mail->Subject = 'Mensaje Automático';
	$mail->IsHTML(true);
	$mail->Body = '
Hola Juan Maldonado 
<br>
Bienvenid@ a Camaleón 🦎, 
<br>
Espero que te encuentres muy bien. 
<br>
Bienvenid@ a ✨ CAMALEÓN MODELS GROUP ✨ 
<br><br>
<img src="webcamaleonabc.com/img/icons/whatsapp1.png" style="width:25px;">
<a href="https://api.whatsapp.com/send?phone=573174922224&text=Hola%20muy%20Amables%20Solicito%20Informaci%C3%B3n%20">Clic Aquí para información a tu WhatsApp</a>
<img src="webcamaleonabc.com/img/icons/whatsapp1.png" style="width:25px;">
<br><br>

<a href="https://www.instagram.com/webcamaleonabc"><img src="https://webcamaleonabc.com/img/icons/instagram1.png" style="width:25px;"></a>
<a href="https://www.facebook.com/webcamaleonabc"><img src="https://webcamaleonabc.com/img/icons/facebook2.jpg" style="width:25px;"></a>
<a href="https://twitter.com/CamaleonModels"><img src="https://webcamaleonabc.com/img/icons/twitter1.png" style="width:25px;"></a>
<a href="https://www.youtube.com/channel/UCYOiiDOd8X9nsEufMFfa9SA/videos"><img src="https://webcamaleonabc.com/img/icons/youtube2.png" style="width:25px;"></a>
';

	if (!$mail->send()) {
		//echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		//echo 'The email message was sent.';
	}
	/**************************************************/

?>