<?php
include("conexion.php");
include("conexion2.php");
include("../js/funciones1.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../resources/PHPMailer/PHPMailer/src/Exception.php';
require '../resources/PHPMailer/PHPMailer/src/PHPMailer.php';
require '../resources/PHPMailer/PHPMailer/src/SMTP.php';

$condicion = $_POST["condicion"];
$fecha_creacion = date('Y-m-d');
$codigo_pais = '57';

$sql1 = "SELECT * FROM numeros_whatsapp WHERE ambiente = 'webcamaleonabc_opcion2'";
$proceso1 = mysqli_query($conexion,$sql1);
$contador1 = mysqli_num_rows($proceso1);
if($contador1>=1){
	while($row1 = mysqli_fetch_array($proceso1)) {
		$webcamaleonabcopcion2 = $row1["numero"];
	}
}else{
	$webcamaleonabcopcion2 = "";
}

if($condicion=='contacto1'){
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$edad = $_POST["edad"];
	$mensaje = $_POST["mensaje"];
	
	$sql1 = "INSERT INTO formulario_contacto1 (nombre,correo,telefono,edad,mensaje,fecha_creacion) VALUES ('$nombre','$correo','$telefono','$edad','$mensaje','$fecha_creacion')";
	$proceso1 = mysqli_query($conexion,$sql1);

	/*****************APARTADO DE WHATSAPP************/
	
$msg = "Hola!! ".$nombre.", 🥰 Bienvenid@ a 
Camaleón Models Group

Es un gusto recibir tu solicitud de información!! mi nombre es 
Gabriela Sánchez

Tienes experiencia en el trabajo!!

¡Es Tiempo de la revolución digital! ¡Transforma tu Vida al lado de una Compañía de Profesionales!✅✅

Cordialmente,
Community Manager Camaleón Models Group";

	$phone = $codigo_pais.$telefono;
	$result = sendMessage($phone,$msg);

	if($result !== false){
		if($result->sent == 1){}else{}
	}else{
		var_dump($result);
	}
	
	/***************************************************/

	/***************APARTADO DE CORREO*****************/
	set_time_limit(0);
    ignore_user_abort(true);
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
            @$fcss = fopen ($rcss, "r");//abrir archivo css
            @$scss = fread ($fcss, filesize ($rcss));//leer contenido de css
            @fclose ($fcss);//cerrar archivo css
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
        //echo "Error al enviar: " . $mail->ErrorInfo;
    } else {
        //echo "Mensaje enviado correctamente";
    }
    /************************/

	$datos = [
		"estatus" => 'ok',
		"sql" => $sql1,
	];

	echo json_encode($datos);
}

if($condicion=='table1'){
	$pagina = $_POST["pagina"];
	$consultasporpagina = $_POST["consultasporpagina"];
	$filtrado = $_POST["filtrado"];

	if($pagina==0 or $pagina==''){
		$pagina = 1;
	}

	if($consultasporpagina==0 or $consultasporpagina==''){
		$consultasporpagina = 10;
	}

	if($filtrado!=''){
		$filtrado = ' and (nombre LIKE "%'.$filtrado.'%" or correo LIKE "%'.$filtrado.'%" or telefono LIKE "%'.$filtrado.'%" or edad LIKE "%'.$filtrado.'%")';
	}

	$limit = $consultasporpagina;
	$offset = ($pagina - 1) * $consultasporpagina;

	$sql1 = "SELECT * FROM formulario_contacto1 ".$filtrado." ORDER BY id DESC";
	$sql2 = "SELECT * FROM formulario_contacto1 ".$filtrado." ORDER BY id DESC LIMIT ".$limit." OFFSET ".$offset;

	$proceso1 = mysqli_query($conexion,$sql1);
	$proceso2 = mysqli_query($conexion,$sql2);
	$conteo1 = mysqli_num_rows($proceso1);
	$paginas = ceil($conteo1 / $consultasporpagina);

	$html = '';

	$html .= '
		<div class="col-xs-12">
	        <table class="table table-bordered">
	            <thead>
		            <tr>
		                <th class="text-center">Nombre</th>
		                <th class="text-center">Correo</th>
		                <th class="text-center">Telefono</th>
		                <th class="text-center">Edad</th>
		                <th class="text-center">Mensaje</th>
		                <th class="text-center">Estatus</th>
		                <th class="text-center">Fecha Creación</th>
		                <th class="text-center">Opciones</th>
		            </tr>
	            </thead>
				<tbody>
	';
	if($conteo1>=1){
		while($row2 = mysqli_fetch_array($proceso2)) {

			if($row2["estatus"]==2){
				$estatus = "Listo";
			}else if($row2["estatus"]==3){
				$estatus = "Repetir";
			}else{
				$estatus = "Pendiente";
			}

			$html .= '
					<tr id="tr_'.$row2["id"].'">
						<td style="text-align:center;">'.$row2["nombre"].'</td>
						<td style="text-align:center;">'.$row2["correo"].'</td>
						<td style="text-align:center;">'.$row2["telefono"].'</td>
						<td style="text-align:center;">'.$row2["edad"].'</td>
						<td style="text-align:center;">'.$row2["mensaje"].'</td>
						<td style="text-align:center;">'.$estatus.'</td>
						<td style="text-align:center;">'.$row2["fecha_creacion"].'</td>
						<td class="text-center" nowrap="nowrap">
		   ';

		   if($estatus=='Pendiente'){
			   $html .= '
			   				<button type="button" class="btn btn-success" onclick="estatus1('.$row2["id"].',2);">Listo</button>
			   				<button type="button" class="btn btn-info" onclick="estatus1('.$row2["id"].',3);">Repetir</button>
			   ';
			}else if($estatus=='Repetir'){
			   $html .= '
			   				<button type="button" class="btn btn-success" onclick="estatus1('.$row2["id"].',2);">Listo</button>
			   ';
			}else if($estatus=='Listo'){
			   $html .= '
			   				<button type="button" class="btn btn-info" onclick="estatus1('.$row2["id"].',3);">Repetir</button>
			   ';
			}

		   $html .= '
		   				</td>
					</tr>
		   ';

		}

	}else{
		$html .= '<tr><td colspan="10" class="text-center" style="font-weight:bold;font-size:20px;">Sin Resultados</td></tr>';
	}

	$html .= '
	            </tbody>
	        </table>
	        <nav>
	            <div class="row">
	                <div class="col-xs-12 col-sm-4 text-center">
	                    <p>Mostrando '.$consultasporpagina.' de '.$conteo1.' Datos disponibles</p>
	                </div>
	                <div class="col-xs-12 col-sm-4 text-center">
	                    <p>Página '.$pagina.' de '.$paginas.' </p>
	                </div> 
	                <div class="col-xs-12 col-sm-4">
			            <nav aria-label="Page navigation" style="float:right; padding-right:2rem;">
							<ul class="pagination">
	';
	
	if ($pagina > 1) {
		$html .= '
								<li class="page-item">
									<a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#">
										<span aria-hidden="true">Anterior</span>
									</a>
								</li>
		';
	}

	$diferenciapagina = 3;
	
	/*********MENOS********/
	if($pagina==2){
		$html .= '
		                		<li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#">
			                            '.($pagina-1).'
			                        </a>
			                    </li>
		';
	}else if($pagina==3){
		$html .= '
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-2).');" href="#"">
			                            '.($pagina-2).'
			                        </a>
			                    </li>
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#"">
			                            '.($pagina-1).'
			                        </a>
			                    </li>
	';
	}else if($pagina>=4){
		$html .= '
		                		<li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-3).');" href="#"">
			                            '.($pagina-3).'
			                        </a>
			                    </li>
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-2).');" href="#"">
			                            '.($pagina-2).'
			                        </a>
			                    </li>
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#"">
			                            '.($pagina-1).'
			                        </a>
			                    </li>
		';
	} 

	/*********MAS********/
	$opcionmas = $pagina+3;
	if($paginas==0){
		$opcionmas = $paginas;
	}else if($paginas>=1 and $paginas<=4){
		$opcionmas = $paginas;
	}
	
	for ($x=$pagina;$x<=$opcionmas;$x++) {
		$html .= '
			                    <li class="page-item 
		';

		if ($x == $pagina){ 
			$html .= '"active"';
		}

		$html .= '">';

		$html .= '
			                        <a class="page-link" onclick="paginacion1('.($x).');" href="#"">'.$x.'</a>
			                    </li>
		';
	}

	if ($pagina < $paginas) {
		$html .= '
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina+1).');" href="#"">
			                            <span aria-hidden="true">Siguiente</span>
			                        </a>
			                    </li>
		';
	}

	$html .= '

						</ul>
					</nav>
				</div>
	        </nav>
	    </div>
	';

	$datos = [
		"estatus"	=> "ok",
		"html"	=> $html,
		"sql2"	=> $sql2,
		"sql1"	=> $sql1,
	];
	echo json_encode($datos);
}

if($condicion=='table2'){
	$pagina = $_POST["pagina"];
	$consultasporpagina = $_POST["consultasporpagina"];
	$filtrado = $_POST["filtrado"];

	if($pagina==0 or $pagina==''){
		$pagina = 1;
	}

	if($consultasporpagina==0 or $consultasporpagina==''){
		$consultasporpagina = 10;
	}

	if($filtrado!=''){
		$filtrado = ' and (nombre LIKE "%'.$filtrado.'%" or correo LIKE "%'.$filtrado.'%" or telefono LIKE "%'.$filtrado.'%" or edad LIKE "%'.$filtrado.'%")';
	}

	$limit = $consultasporpagina;
	$offset = ($pagina - 1) * $consultasporpagina;

	$sql1 = "SELECT * FROM wix ".$filtrado." ORDER BY id DESC";
	$sql2 = "SELECT * FROM wix ".$filtrado." ORDER BY id DESC LIMIT ".$limit." OFFSET ".$offset;

	$proceso1 = mysqli_query($conexion,$sql1);
	$proceso2 = mysqli_query($conexion,$sql2);
	$conteo1 = mysqli_num_rows($proceso1);
	$paginas = ceil($conteo1 / $consultasporpagina);

	$html = '';

	$html .= '
		<div class="col-xs-12">
	        <table class="table table-bordered">
	            <thead>
		            <tr>
		                <th class="text-center">Nombre</th>
		                <th class="text-center">Correo</th>
		                <th class="text-center">Telefono</th>
		                <th class="text-center">Hablame</th>
		                <th class="text-center">Estatus</th>
		                <th class="text-center">Fecha Creación</th>
		                <th class="text-center">Opciones</th>
		            </tr>
	            </thead>
				<tbody>
	';
	if($conteo1>=1){
		while($row2 = mysqli_fetch_array($proceso2)) {

			if($row2["estatus"]==2){
				$estatus = "Listo";
			}else if($row2["estatus"]==3){
				$estatus = "Repetir";
			}else{
				$estatus = "Pendiente";
			}

			if($row2["hablame"]==2){
				$hablame = "Enviado";
			}else{
				$hablame = "No enviado";
			}


			$html .= '
					<tr id="tr_'.$row2["id"].'">
						<td style="text-align:center;">'.$row2["nombre"].'</td>
						<td style="text-align:center;">'.$row2["correo"].'</td>
						<td style="text-align:center;">'.$row2["telefono"].'</td>
						<td style="text-align:center;">'.$hablame.'</td>
						<td style="text-align:center;">'.$estatus.'</td>
						<td style="text-align:center;">'.$row2["fecha_creacion"].'</td>
						<td class="text-center" nowrap="nowrap">
		   ';

		   if($estatus=='Pendiente'){
			   $html .= '
			   				<button type="button" class="btn btn-success" onclick="estatus1('.$row2["id"].',2);">Listo</button>
			   				<button type="button" class="btn btn-info" onclick="estatus1('.$row2["id"].',3);">Repetir</button>
			   ';
			}else if($estatus=='Repetir'){
			   $html .= '
			   				<button type="button" class="btn btn-success" onclick="estatus1('.$row2["id"].',2);">Listo</button>
			   ';
			}else if($estatus=='Listo'){
			   $html .= '
			   				<button type="button" class="btn btn-info" onclick="estatus1('.$row2["id"].',3);">Repetir</button>
			   ';
			}

		   $html .= '
		   				</td>
					</tr>
		   ';

		}

	}else{
		$html .= '<tr><td colspan="10" class="text-center" style="font-weight:bold;font-size:20px;">Sin Resultados</td></tr>';
	}

	$html .= '
	            </tbody>
	        </table>
	        <nav>
	            <div class="row">
	                <div class="col-xs-12 col-sm-4 text-center">
	                    <p>Mostrando '.$consultasporpagina.' de '.$conteo1.' Datos disponibles</p>
	                </div>
	                <div class="col-xs-12 col-sm-4 text-center">
	                    <p>Página '.$pagina.' de '.$paginas.' </p>
	                </div> 
	                <div class="col-xs-12 col-sm-4">
			            <nav aria-label="Page navigation" style="float:right; padding-right:2rem;">
							<ul class="pagination">
	';
	
	if ($pagina > 1) {
		$html .= '
								<li class="page-item">
									<a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#">
										<span aria-hidden="true">Anterior</span>
									</a>
								</li>
		';
	}

	$diferenciapagina = 3;
	
	/*********MENOS********/
	if($pagina==2){
		$html .= '
		                		<li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#">
			                            '.($pagina-1).'
			                        </a>
			                    </li>
		';
	}else if($pagina==3){
		$html .= '
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-2).');" href="#"">
			                            '.($pagina-2).'
			                        </a>
			                    </li>
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#"">
			                            '.($pagina-1).'
			                        </a>
			                    </li>
	';
	}else if($pagina>=4){
		$html .= '
		                		<li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-3).');" href="#"">
			                            '.($pagina-3).'
			                        </a>
			                    </li>
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-2).');" href="#"">
			                            '.($pagina-2).'
			                        </a>
			                    </li>
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#"">
			                            '.($pagina-1).'
			                        </a>
			                    </li>
		';
	} 

	/*********MAS********/
	$opcionmas = $pagina+3;
	if($paginas==0){
		$opcionmas = $paginas;
	}else if($paginas>=1 and $paginas<=4){
		$opcionmas = $paginas;
	}
	
	for ($x=$pagina;$x<=$opcionmas;$x++) {
		$html .= '
			                    <li class="page-item 
		';

		if ($x == $pagina){ 
			$html .= '"active"';
		}

		$html .= '">';

		$html .= '
			                        <a class="page-link" onclick="paginacion1('.($x).');" href="#"">'.$x.'</a>
			                    </li>
		';
	}

	if ($pagina < $paginas) {
		$html .= '
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina+1).');" href="#"">
			                            <span aria-hidden="true">Siguiente</span>
			                        </a>
			                    </li>
		';
	}

	$html .= '

						</ul>
					</nav>
				</div>
	        </nav>
	    </div>
	';

	$datos = [
		"estatus"	=> "ok",
		"html"	=> $html,
		"sql2"	=> $sql2,
		"sql1"	=> $sql1,
	];
	echo json_encode($datos);
}

if($condicion=='estatus1'){
	$id = $_POST['id'];
	$estatus = $_POST['estatus'];

	$sql1 = "SELECT * FROM formulario_contacto1 WHERE id = ".$id;
	$proceso1 = mysqli_query($conexion,$sql1);
	while($row1 = mysqli_fetch_array($proceso1)) {
		$nombre = $row1["nombre"];
		$correo = $row1["correo"];
		$telefono = $row1["telefono"];
	}

	if($estatus==2){
		$sql2 = "UPDATE formulario_contacto1 SET estatus = $estatus WHERE id = ".$id;
		$proceso2 = mysqli_query($conexion,$sql2);
	}

	/*****************APARTADO DE WHATSAPP************/

$msg = "Hola!! ".$nombre.", 🥰 Bienvenid@ a 
Camaleón Models Group

Es un gusto recibir tu solicitud de información!! mi nombre es 
Gabriela Sánchez

Tienes experiencia en el trabajo!!

¡Es Tiempo de la revolución digital! ¡Transforma tu Vida al lado de una Compañía de Profesionales!✅✅

Cordialmente,
Community Manager Camaleón Models Group";


	$phone = $codigo_pais.$telefono;
	$result = sendMessage($phone,$msg);

	if($result !== false){
		if($result->sent == 1){}else{}
	}else{
		var_dump($result);
	}

	/***************************************************/

	/***************APARTADO DE CORREO*****************/
	set_time_limit(0);
    ignore_user_abort(true);
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
            @$fcss = fopen ($rcss, "r");//abrir archivo css
            @$scss = fread ($fcss, filesize ($rcss));//leer contenido de css
            @fclose ($fcss);//cerrar archivo css
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
        //echo "Error al enviar: " . $mail->ErrorInfo;
    } else {
        //echo "Mensaje enviado correctamente";
    }
    /************************/

	$datos = [
		"estatus"	=> "ok",
		"msg"	=> "Se ha cambiado el estatus satisfactoriamente!",
		"sql1"	=> $sql1,
	];
	echo json_encode($datos);
}

if($condicion=='estatus2'){
	$id = $_POST['id'];
	$estatus = $_POST['estatus'];

	$sql1 = "SELECT * FROM wix WHERE id = ".$id;
	$proceso1 = mysqli_query($conexion,$sql1);
	while($row1 = mysqli_fetch_array($proceso1)) {
		$nombre = $row1["nombre"];
		$correo = $row1["correo"];
		$telefono = $row1["telefono"];
	}

	if($estatus==2){
		$sql2 = "UPDATE wix SET estatus = $estatus WHERE id = ".$id;
		$proceso2 = mysqli_query($conexion,$sql2);
	}

	/*****************APARTADO DE WHATSAPP************/

$msg = "Hola!! ".$nombre.", 🥰 Bienvenid@ a 
Camaleón Models Group

Es un gusto recibir tu solicitud de información!! mi nombre es 
Gabriela Sánchez

Tienes experiencia en el trabajo!!

¡Es Tiempo de la revolución digital! ¡Transforma tu Vida al lado de una Compañía de Profesionales!✅✅

Cordialmente,
Community Manager Camaleón Models Group";


	$phone = $codigo_pais.$telefono;
	$result = sendMessage($phone,$msg);

	if($result !== false){
		if($result->sent == 1){}else{}
	}else{
		var_dump($result);
	}

	/***************************************************/

	/***************APARTADO DE CORREO*****************/
	set_time_limit(0);
    ignore_user_abort(true);
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
            @$fcss = fopen ($rcss, "r");//abrir archivo css
            @$scss = fread ($fcss, filesize ($rcss));//leer contenido de css
            @fclose ($fcss);//cerrar archivo css
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
        //echo "Error al enviar: " . $mail->ErrorInfo;
    } else {
        //echo "Mensaje enviado correctamente";
    }
    /************************/

	$datos = [
		"estatus"	=> "ok",
		"msg"	=> "Se ha cambiado el estatus satisfactoriamente!",
		"sql1"	=> $sql1,
	];
	echo json_encode($datos);
}

if($condicion=='noenviados1'){
	$sql1 = "SELECT * FROM wix WHERE hablame = 0";
	$proceso1 = mysqli_query($conexion,$sql1);
	$contador1 = mysqli_num_rows($proceso1);
	$datos = [
		"estatus"	=> "ok",
		"sql1"	=> $sql1,
		"contador"	=> $contador1,
	];
	echo json_encode($datos);
}


if($condicion=='table3'){
	$pagina = $_POST["pagina"];
	$consultasporpagina = $_POST["consultasporpagina"];
	$filtrado = $_POST["filtrado"];
	$estatus = $_POST["estatus"];

	if($pagina==0 or $pagina==''){
		$pagina = 1;
	}

	if($consultasporpagina==0 or $consultasporpagina==''){
		$consultasporpagina = 10;
	}

	if($estatus!=''){
		$estatus = ' and hablame = '.$estatus;
	}

	if($filtrado!=''){
		$filtrado = ' and (nombre LIKE "%'.$filtrado.'%" or correo LIKE "%'.$filtrado.'%" or telefono LIKE "%'.$filtrado.'%" or edad LIKE "%'.$filtrado.'%")';
	}

	$limit = $consultasporpagina;
	$offset = ($pagina - 1) * $consultasporpagina;

	$sql1 = "SELECT * FROM formulario_contacto1 WHERE id !=0 ".$filtrado.$estatus." ORDER BY id ASC";
	$sql2 = "SELECT * FROM formulario_contacto1 WHERE id !=0 ".$filtrado.$estatus." ORDER BY id ASC LIMIT ".$limit." OFFSET ".$offset;

	$proceso1 = mysqli_query($conexion,$sql1);
	$proceso2 = mysqli_query($conexion,$sql2);
	$conteo1 = mysqli_num_rows($proceso1);
	$paginas = ceil($conteo1 / $consultasporpagina);

	$html = '';

	$html .= '
		<div class="col-xs-12">
	        <table class="table table-bordered">
	            <thead>
		            <tr>
		                <th class="text-center">Nombre</th>
		                <th class="text-center">Correo</th>
		                <th class="text-center">Telefono</th>
		                <th class="text-center">Edad</th>
		                <th class="text-center">Mensaje</th>
		                <th class="text-center">Estatus</th>
		                <th class="text-center">Fecha Registro</th>
		            </tr>
	            </thead>
				<tbody>
	';
	if($conteo1>=1){
		while($row2 = mysqli_fetch_array($proceso2)) {

			if($row2["hablame"]==2){
				$hablame = "Listo";
			}else{
				$hablame = "Pendiente";
			}

			$html .= '
					<tr id="tr_'.$row2["id"].'">
						<td style="text-align:center;">'.$row2["nombre"].'</td>
						<td style="text-align:center;">'.$row2["correo"].'</td>
						<td style="text-align:center;">'.$row2["telefono"].'</td>
						<td style="text-align:center;">'.$row2["edad"].'</td>
						<td style="text-align:center;">'.$row2["mensaje"].'</td>
						<td style="text-align:center;">'.$hablame.'</td>
						<td style="text-align:center;">'.$row2["fecha_creacion"].'</td>
					</tr>
		   ';

		}

	}else{
		$html .= '<tr><td colspan="10" class="text-center" style="font-weight:bold;font-size:20px;">Sin Resultados</td></tr>';
	}

	$html .= '
	            </tbody>
	        </table>
	        <nav>
	            <div class="row">
	                <div class="col-xs-12 col-sm-4 text-center">
	                    <p>Mostrando '.$consultasporpagina.' de '.$conteo1.' Datos disponibles</p>
	                </div>
	                <div class="col-xs-12 col-sm-4 text-center">
	                    <p>Página '.$pagina.' de '.$paginas.' </p>
	                </div> 
	                <div class="col-xs-12 col-sm-4">
			            <nav aria-label="Page navigation" style="float:right; padding-right:2rem;">
							<ul class="pagination">
	';
	
	if ($pagina > 1) {
		$html .= '
								<li class="page-item">
									<a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#">
										<span aria-hidden="true">Anterior</span>
									</a>
								</li>
		';
	}

	$diferenciapagina = 3;
	
	/*********MENOS********/
	if($pagina==2){
		$html .= '
		                		<li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#">
			                            '.($pagina-1).'
			                        </a>
			                    </li>
		';
	}else if($pagina==3){
		$html .= '
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-2).');" href="#"">
			                            '.($pagina-2).'
			                        </a>
			                    </li>
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#"">
			                            '.($pagina-1).'
			                        </a>
			                    </li>
	';
	}else if($pagina>=4){
		$html .= '
		                		<li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-3).');" href="#"">
			                            '.($pagina-3).'
			                        </a>
			                    </li>
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-2).');" href="#"">
			                            '.($pagina-2).'
			                        </a>
			                    </li>
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina-1).');" href="#"">
			                            '.($pagina-1).'
			                        </a>
			                    </li>
		';
	} 

	/*********MAS********/
	$opcionmas = $pagina+3;
	if($paginas==0){
		$opcionmas = $paginas;
	}else if($paginas>=1 and $paginas<=4){
		$opcionmas = $paginas;
	}
	
	for ($x=$pagina;$x<=$opcionmas;$x++) {
		$html .= '
			                    <li class="page-item 
		';

		if ($x == $pagina){ 
			$html .= '"active"';
		}

		$html .= '">';

		$html .= '
			                        <a class="page-link" onclick="paginacion1('.($x).');" href="#"">'.$x.'</a>
			                    </li>
		';
	}

	if ($pagina < $paginas) {
		$html .= '
			                    <li class="page-item">
			                        <a class="page-link" onclick="paginacion1('.($pagina+1).');" href="#"">
			                            <span aria-hidden="true">Siguiente</span>
			                        </a>
			                    </li>
		';
	}

	$html .= '

						</ul>
					</nav>
				</div>
	        </nav>
	    </div>
	';

	$datos = [
		"estatus"	=> "ok",
		"html"	=> $html,
		"sql2"	=> $sql2,
		"sql1"	=> $sql1,
	];
	echo json_encode($datos);
}

?>