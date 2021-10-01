<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../resources/PHPMailer/PHPMailer/src/Exception.php';
require '../resources/PHPMailer/PHPMailer/src/PHPMailer.php';
require '../resources/PHPMailer/PHPMailer/src/SMTP.php';
//date_default_timezone_set('Etc/UTC');

$correo = 'juanmaldonado.co@gmail.com';
//$correo = 'bigkadejj2@gmail.com';


	set_time_limit(0);
    ignore_user_abort(true);
    /*RECOGER VALORES ENVIADOS DESDE INDEX.PHP*/
    //$sDestino = $_POST['txtDestin'];
    //$sAsunto = $_POST['txtAsunto'];
    //$sMensaje = $_POST['txtMensa'];
    //$sImagen = SubirArchivo('txtImagen');
    //$sAdjunto = SubirArchivo('txtAdjun');

    /*CONFIGURACIÓN DE CLASE*/
        $mail = new PHPMailer;
        $mail->isSMTP(); //Indicar que se usará SMTP
        $mail->CharSet = 'UTF-8';//permitir envío de caracteres especiales (tildes y ñ)
    /*CONFIGURACIÓN DE DEBUG (DEPURACIÓN)*/
        $mail->SMTPDebug = 0; //Mensajes de debug; 0 = no mostrar (en producción), 1 = de cliente, 2 = de cliente y servidor
        $mail->Debugoutput = 'html'; //Mostrar mensajes (resultados) de depuración(debug) en html
    /*CONFIGURACIÓN DE PROVEEDOR DE CORREO QUE USARÁ EL EMISOR(GMAIL)*/
        $mail->Host = 'mail.camaleonmg.com'; //Nombre de host
        $mail->Port = 587; //Puerto SMTP, 587 para autenticado TLS
        $mail->SMTPSecure = 'tls'; //Sistema de encriptación - ssl (obsoleto) o tls
        $mail->SMTPAuth = true;//Usar autenticación SMTP
        $mail->SMTPOptions = array(
            'ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true)
        );//opciones para "saltarse" comprobación de certificados (hace posible del envío desde localhost)
    //CONFIGURACIÓN DEL EMISOR
        $mail->Username = "noreply@camaleonmg.com";
        $mail->Password = "juanmaldonado123";
        $mail->setFrom('noreply@camaleonmg.com', 'Camaleon Models');

    //CONFIGURACIÓN DEL MENSAJE, EL CUERPO DEL MENSAJE SERA UNA PLANTILLA HTML QUE INCLUYE IMAGEN Y CSS
        $mail->Subject = '$2.500.000 Mensuales!!'; //asunto del mensaje
        //incrustar imagen para cuerpo de mensaje(no confundir con Adjuntar)
           // $mail->AddEmbeddedImage($sImagen, 'imagen'); //ruta de archivo de imagen
        //cargar archivo css para cuerpo de mensaje
            //$rcss = "../css/estilo_correo1.css"; //ruta de archivo css
            $fcss = fopen ($rcss, "r");//abrir archivo css
            $scss = fread ($fcss, filesize ($rcss));//leer contenido de css
            fclose ($fcss);//cerrar archivo css
        //Cargar archivo html   
            $shtml = file_get_contents('https://webcamaleonabc.com/script/mensaje1.html');
        //reemplazar sección de plantilla html con el css cargado y mensaje creado
            //$incss  = str_replace('<style id="estilo"></style>',"<style>$scss</style>",$shtml);
            //$cuerpo = str_replace('<p id="mensaje"></p>',"Mensaje de Prueba!",$incss);
            $cuerpo = str_replace('<p id="mensaje"></p>',"Mensaje de Prueba!",$shtml);
        $mail->Body = $cuerpo; //cuerpo del mensaje
        $mail->AltBody = '---';//Mensaje de sólo texto si el receptor no acepta HTML

    //CONFIGURACIÓN DE ARCHIVOS ADJUNTOS 
        //$mail->addAttachment($sAdjunto);

    /**********CONFIGURACIÓN DE RECEPTORES**********/
    $mail->addAddress($correo, '');
    /*
	$aDestino = explode(",",$correo);
	foreach ( $aDestino as $i => $sDest){
		$mail->addAddress(trim($sDest), "Juan Maldonado ".$i+1);
	}
	/************************************************/

    /*****ENVIAR MENSAJE******/
    
    if (!$mail->send()) {
        echo "Error al enviar: " . $mail->ErrorInfo;
    } else {
        echo "Mensaje enviado correctamente";
        //eliminar archivos temporales de carpeta subidas
        //unlink($sImagen);
        //unlink($sAdjunto);
    }
    /************************/

exit;

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
	$mail->addAddress($correo, '');
	$mail->IsHTML(true);

	/****cargar archivo css para cuerpo de mensaje*****/
	$rcss = "https://webcamaleonabc.com/css/estilo_correo1.css";//ruta de archivo css
	$fcss = fopen ($rcss, "r");//abrir archivo css
	$scss = fread ($fcss, filesize ($rcss));//leer contenido de css
	fclose ($fcss);//cerrar archivo css
	/**************************************************/

	$mail->Subject = 'Mensaje Automático';
	echo $mensaje_correo = '
	<div class="col-12">
		<a href="https://google.com" target="_blank" style="text-align: center;">
			<img src="https://webcamaleonabc.com/img/correo-imagen1.png" id="imagen1">
		</a>

		<a href="https://google.com" target="_blank" style="text-align: center;">
			<img src="https://webcamaleonabc.com/img/correo-w.png" id="imagen2">
		</a>
		<a href="https://google.com" target="_blank" style="text-align: center;">
			<img src="https://webcamaleonabc.com/img/correo-ins1.png" id="imagen3" style="width: 375px;">
		</a>
		<a href="https://google.com" target="_blank" style="text-align: center;">
			<img src="https://webcamaleonabc.com/img/correo-ins2.png" id="imagen4" style="width: 375px;">
		</a>
		<a href="https://google.com" target="_blank" style="text-align: center;">
			<img src="https://webcamaleonabc.com/img/correo-f.png" id="imagen5" style="width: 375px;">
		</a>

		<a href="https://google.com" target="_blank" style="text-align: center;">
			<img src="https://webcamaleonabc.com/img/correo-t.png" id="imagen6">
		</a>
		<a href="https://google.com" target="_blank" style="text-align: center;">
			<img src="https://webcamaleonabc.com/img/correo-y.png" id="imagen7">
		</a>
		<a href="https://google.com" target="_blank" style="text-align: center;">
			<img src="https://webcamaleonabc.com/img/correo-tiktok.png" id="imagen8">
		</a>
	</div>
	';
	$mail->Body = $mensaje_correo;

	exit;

	if (!$mail->send()) {
		//echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'The email message was sent.';
	}
	/**************************************************/

	/*
	$datos = [
		"estatus" => 'ok',
		"sql" => $sql1,
	];
	*/

	echo json_encode($datos);

?>