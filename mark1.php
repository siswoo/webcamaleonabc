<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="img/favicon1.webp">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link href="resources/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>WebCamaleonAbc</title>
  </head>
<body>

<style type="text/css">
	#seccion1 {
		background: lightblue url("img/img4.webp") no-repeat fixed center;
	}

	#seccion2 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion3 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion3_sub1 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion3_sub1_1 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion3_sub1_2 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion3_sub2_1 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion3_sub3_1 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion4 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion4_sub1 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion4_sub2 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion4_sub1_1 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion4_sub2_1 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion4_sub3_1 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion5 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion5_sub1 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion5_sub2 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#seccion5_sub3 {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	#final {
		background: lightblue url("img/mark1/fondo1.png") fixed center;
	}

	img.zoom {
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
	}

	.transition{
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
	}

</style>

<?php
$ubicacion='mark1';
include("script/conexion.php");
include("header.php");
?>

	<div id="seccion1" style="display: block;">
		<div class="row">
			<div class="col-12 col-md-12 text-center">
				<img src="img/mark1/inicio.png" class="img-fluid zoom" value="1" onclick="accion('seccion2');" style="cursor: pointer; margin-top: 5rem; margin-bottom: 5rem;">
			</div>
		</div>
	</div>

	<div id="seccion2" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-12 text-center" style="font-weight: bold; font-size: 60px; color: #dfbc7d;">Bienvenidos a Camaleón Models</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/foto1.png" class="img-fluid" value="1" onclick="accion('seccion2');" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-justify" style="font-size: 20px; font-weight: bold; padding: 1rem 3rem 1rem 3rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white;">
				Somos el equipo de profesionales más representativos de la industria Webcam con más de 4 años de experiencia en la industria 
				en nuestro país, por innovación, creatividad y compromiso humano en brindar un excelente servicio y acompañamiento estratégico 
				para que logres incursionar efectivamente en el modelaje WebCam a nivel Profesional.
				A continuación, encontrarás el paso a paso que debes tener en cuenta para ingresar como modelo camaleón.
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/logo1.png" class="img-fluid" style="width: 565px;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/siguiente1.png" class="img-fluid" value="1" onclick="accion('seccion3');" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="seccion3" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4 text-center">
				<img src="img/mark1/modulo-1.png" value="1" onclick="accion('seccion3_sub1');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4 text-center">
				<img src="img/mark1/modulo-2.png" value="1" onclick="accion('seccion4');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4 text-center">
				<img src="img/mark1/modulo-3.png" value="1" onclick="accion('seccion5');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center mt-3 mb-3">
				<img src="img/mark1/logo1.png" class="img-fluid" style="width: 565px;">
			</div>
		</div>
	</div>

	<div id="seccion3_sub1" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4 text-center">
				<img src="img/mark1/entrevista1.png" value="1" onclick="accion('seccion3_sub1_1');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4 text-center">
				<img src="img/mark1/registroapp1.png" value="1" onclick="accion('seccion4');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4 text-center">
				<img src="img/mark1/tomadefotos1.png" value="1" onclick="accion('seccion5');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="seccion3_sub1_1" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<video src="img/mark1/video1.mp4" class="img-fluid" style="width: 260px; max-height: 500px;" controls=""></video>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-justify" style="font-size: 30px; font-weight: bold; padding: 1rem 3rem 1rem 3rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white;">
				Al llegar a nuestras instalaciones nuestro personal de seguridad te recibirá indicándote el punto de registro para inicar la entrevista.
				<br>
				Conocerás todos nuestros números de contacto por que en Camaleón Models nos preocupamos por escuchar nuestros modelos.
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/inicio1.png" value="1" onclick="accion('seccion1');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/anterior-pag.png" value="1" onclick="accion('seccion3_sub1');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/siguiente-pag.png" value="1" onclick="accion('seccion3_sub1_2');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style="margin-top: 2rem;">
				<img src="img/mark1/flecha-izquierda.png" value="1" onclick="accion('seccion3_sub1');" class="img-fluid zoom mr-3" style="cursor: pointer;">
				<img src="img/mark1/flecha-derecha.png" value="1" onclick="accion('seccion3_sub1_2');" class="img-fluid zoom ml-3" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="seccion3_sub1_2" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
				<img src="img/mark1/entrevista2.jpg" value="1" onclick="accion('seccion1');" class="img-fluid">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-justify" style="font-size: 30px; font-weight: bold; padding: 1rem 3rem 1rem 3rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white;">
				Nuestro personal de recursos humanos se presentará y dara inicio a la presentación dónde conocerás la compañia, al final de esto responderemos a todas las inquietudes.
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/inicio1.png" value="1" onclick="accion('seccion1');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/anterior-pag.png" value="1" onclick="accion('seccion3_sub1_1');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/siguiente-pag.png" value="1" onclick="accion('seccion3_sub1');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style="margin-top: 2rem;">
				<img src="img/mark1/flecha-izquierda.png" value="1" onclick="accion('seccion3_sub1_1');" class="img-fluid zoom mr-3" style="cursor: pointer;">
				<img src="img/mark1/flecha-derecha.png" value="1" onclick="accion('seccion3_sub1');" class="img-fluid zoom ml-3" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="seccion3_sub2_1" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
				<img src="img/mark1/registro1.png" value="1" onclick="accion('seccion1');" class="img-fluid" style="max-width: 450px;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center" style="font-size: 34px; font-weight: bold; padding: 1rem 3rem 1rem 3rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white;">
				Tendrás acceso por primera vez en nuestra APP diligenciando el formulario en nuestras pantallas.
				<br><br>
				A continuación te presentaremos el siguiente video para dar claridad a cualquier inquietud.
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/inicio1.png" value="1" onclick="accion('seccion1');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/anterior-pag.png" value="1" onclick="accion('seccion3');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/siguiente-pag.png" value="1" onclick="accion('seccion3_sub2_2');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style="margin-top: 2rem;">
				<img src="img/mark1/flecha-izquierda.png" value="1" onclick="accion('seccion3');" class="img-fluid zoom mr-3" style="cursor: pointer;">
				<img src="img/mark1/flecha-derecha.png" value="1" onclick="accion('seccion3_sub2_2');" class="img-fluid zoom ml-3" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="seccion3_sub3_1" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style="margin-top: 2rem;">
				<img src="img/mark1/imagen-toma-de-fotos.png" value="1" onclick="accion('seccion1');" class="img-fluid" style="max-width: 550px;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center" style="font-size: 34px; font-weight: bold; padding: 1rem 3rem 1rem 3rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem;">
				Para agilizar los procesos y no perder ningún día con Camaleón, procedemos a la toma de fotos de tu documento para verificar que si seas apt@ para trabajar en las páginas dándote solución oportuna.
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1 mt-1">&nbsp;</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6">
				<img src="img/mark1/inicio1.png" value="1" onclick="accion('seccion1');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="seccion4" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4 text-center">
				<img src="img/mark1/capa1.png" value="1" onclick="accion('seccion4_sub1');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4 text-center">
				<img src="img/mark1/asig1.png" value="1" onclick="accion('seccion4_sub2_1');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4 text-center">
				<img src="img/mark1/aper1.png" value="1" onclick="accion('seccion4_sub3_1');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="seccion4_sub1" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					Conocerás la primera página en la que vas a trabajar y cómo adquirir sus ganancias
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					Consejos para tu primer día
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					Aprenderás al manejo de juguetes
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					Aprenderás a cómo logearte
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					Tips para tus primeras intenciones
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					Conocerás nuestra APP y su manejo
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-12 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					5 tips para tus transmisiones
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/inicio1.png" value="1" onclick="accion('seccion1');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/anterior-pag.png" value="1" onclick="accion('seccion4');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/siguiente-pag.png" value="1" onclick="accion('seccion4_sub1_1');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style="margin-top: 2rem;">
				<img src="img/mark1/flecha-izquierda.png" value="1" onclick="accion('seccion4');" class="img-fluid zoom mr-3" style="cursor: pointer;">
				<img src="img/mark1/flecha-derecha.png" value="1" onclick="accion('seccion4_sub1_1');" class="img-fluid zoom ml-3" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="seccion4_sub1_1" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-12 text-center">
				<p style="font-size: 30px; font-weight: bold; margin-bottom: 2rem; color: white; margin-top: 2rem; text-transform: uppercase;">
					Te damos algunos consejos básicos para dominar la cámara
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					1. La importancia de saber como mostrar tu rostro frente a una cámara
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					2. Desenvuélvete mejor frente a la cámara
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					3. Todo es cuestión de actitud
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					4. Ten en cuenta las reglas de cada página
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					5. Cada transmisión es como tu primera cita
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 18px; font-weight: bold; padding: 1rem 1rem 1rem 1rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem; cursor: pointer;" class="zoom">
					Para saber más, visita nuestro canal de Youtube Camaleón Models
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/inicio1.png" value="1" onclick="accion('seccion1');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/anterior-pag.png" value="1" onclick="accion('seccion3');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/siguiente-pag.png" value="1" onclick="accion('seccion4_sub2_1');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style="margin-top: 2rem;">
				<img src="img/mark1/flecha-izquierda.png" value="1" onclick="accion('seccion3');" class="img-fluid zoom mr-3" style="cursor: pointer;">
				<img src="img/mark1/flecha-derecha.png" value="1" onclick="accion('seccion4_sub2_1');" class="img-fluid zoom ml-3" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="seccion4_sub2_1" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
				<img src="img/mark1/Recusos-humanos.png" value="1" onclick="accion('seccion1');" class="img-fluid" style="max-width: 480px;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center" style="font-size: 34px; font-weight: bold; padding: 1rem 3rem 1rem 3rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 1rem;">
				Recursos humanos te asignará el turno laboral de tu preferencia.
				<br>
				Posteriormente a esto leerás el contrato y procederás a realizar la firma del mismo.
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/inicio1.png" value="1" onclick="accion('seccion1');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/anterior-pag.png" value="1" onclick="accion('seccion4');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style="margin-top: 2rem;">
				<img src="img/mark1/flecha-izquierda.png" value="1" onclick="accion('seccion4');" class="img-fluid zoom mr-3" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="seccion4_sub3_1" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
				<video src="img/mark1/video3.mp4" class="img-fluid" style="max-width: 750px; max-height: 500px;" controls=""></video>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 34px; font-weight: bold; padding: 1rem 3rem 1rem 3rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 3rem;">
					Nuestro personal de soporte dará inicio a realizar tu respectiva apertura de cuentas, para verificarlo puedes acceder a nuestra APP y conocer a que cuentas quedaste inscrito.
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/inicio1.png" value="1" onclick="accion('seccion3');" class="img-fluid zoom" style="cursor: pointer; width: 150px;">
			</div>
		</div>
	</div>

	<div id="seccion5" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4 text-center">
				<img src="img/mark1/empi1.png" value="1" onclick="accion('seccion5_sub1');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4 text-center">
				<img src="img/mark1/asig2.png" value="1" onclick="accion('seccion5_sub2');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4 text-center">
				<img src="img/mark1/conoce1.png" value="1" onclick="accion('seccion5_sub3');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center mt-3 mb-3">
				<img src="img/mark1/logo1.png" class="img-fluid" style="width: 565px;">
			</div>
		</div>
	</div>

	<div id="seccion5_sub1" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
				<video src="img/mark1/video4.mp4" class="img-fluid" style="max-width: 750px; max-height: 500px;" controls=""></video>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 34px; font-weight: bold; padding: 1rem 3rem 1rem 3rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 3rem;">
					Llegas a la sede en dónde conocerás todas nuestras instalaciones, además de esto te asignaremos un locker dónde podrás acomodar tus pertenencias
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/inicio1.png" value="1" onclick="accion('seccion1');" class="img-fluid zoom" style="cursor: pointer; width: 150px;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style="margin-top: 2rem;">
				<img src="img/mark1/flecha-izquierda.png" value="1" onclick="accion('seccion5');" class="img-fluid zoom mr-3" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="seccion5_sub2" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
				<img src="img/mark1/rooms1.png" value="1" onclick="accion('seccion1');" class="img-fluid" style="max-width: 580px; margin-top: 3rem;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 34px; font-weight: bold; padding: 1rem 3rem 1rem 3rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem;">
					Tu monitor te asignará el Room según tu perfil y con el tiempo verificará cuál es él más adecuado para ti. Es importante conocer a tu monitor, ya que será la persona que te orientará y acompañará en tus transmisiones
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/inicio1.png" value="1" onclick="accion('seccion3');" class="img-fluid zoom" style="cursor: pointer; width: 150px;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style="margin-top: 2rem;">
				<img src="img/mark1/flecha-izquierda.png" value="1" onclick="accion('seccion5');" class="img-fluid zoom mr-3" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="seccion5_sub3" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
				<img src="img/mark1/monitoreo1.png" value="1" onclick="accion('seccion1');" class="img-fluid" style="max-width: 580px; margin-top: 1rem;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<p style="font-size: 34px; font-weight: bold; padding: 1rem 3rem 1rem 3rem; border: solid #dfbc7d 5px; margin-bottom: 2rem; color: white; margin-top: 2rem;">
					Acá podrás conocer el monitor, la persona que te va a brindar el acompañamiento adecuado, enseñando tipos de show, ángulos de cámara, consejos de transmisiones y guiándote en ella
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 text-center">
				<img src="img/mark1/inicio1.png" value="1" onclick="accion('seccion3');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/anterior-pag.png" value="1" onclick="accion('seccion5');" class="img-fluid zoom" style="cursor: pointer;">
				<img src="img/mark1/siguiente-pag.png" value="1" onclick="accion('final');" class="img-fluid zoom" style="cursor: pointer;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style="margin-top: 2rem;">
				<img src="img/mark1/flecha-izquierda.png" value="1" onclick="accion('seccion5');" class="img-fluid zoom mr-3" style="cursor: pointer;">
				<img src="img/mark1/flecha-derecha.png" value="1" onclick="accion('final');" class="img-fluid zoom ml-3" style="cursor: pointer;">
			</div>
		</div>
	</div>

	<div id="final" style="display: none;">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="margin-top: 2rem;">
				<p style="font-weight: bold; font-size: 60px; text-transform: uppercase; color: #dfbc7d;">No lo pienses más <br> empieza a monetizar <br> tus sueños</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-12 text-center">
				<img src="img/mark1/final1.png" value="1" onclick="accion('seccion1');" class="img-fluid zoom" style="cursor: pointer; width: 250px;">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-12">
				<img src="img/mark1/logo1.png" class="img-fluid" style="width: 565px; margin-left: 2rem; margin-bottom: 1rem;">
			</div>
		</div>
	</div>

<?php
include("footer.php");
?>

</body>
</html>

<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>

<script>
	$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
	});

	function accion(value){
		console.log(value);
		if(value=='seccion1'){
			$('#seccion1').show("slow");

			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion2'){
			$('#seccion2').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion3'){
			$('#seccion3').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion3_sub1'){
			$('#seccion3_sub1').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion3_sub1_1'){
			$('#seccion3_sub1_1').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion3_sub1_2'){
			$('#seccion3_sub1_2').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion3_sub3_1'){
			$('#seccion3_sub3_1').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion4'){
			$('#seccion4').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion4_sub1'){
			$('#seccion4_sub1').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion4_sub1_1'){
			$('#seccion4_sub1_1').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion4_sub2_1'){
			$('#seccion4_sub2_1').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion4_sub3_1'){
			$('#seccion4_sub3_1').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion5'){
			$('#seccion5').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion5_sub1'){
			$('#seccion5_sub1').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion5_sub2'){
			$('#seccion5_sub2').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub3').hide("slow");
			$('#final').hide("slow");
		}else if(value=='seccion5_sub3'){
			$('#seccion5_sub3').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#final').hide("slow");
		}else if(value=='final'){
			$('#final').show("slow");

			$('#seccion1').hide("slow");
			$('#seccion2').hide("slow");
			$('#seccion3').hide("slow");
			$('#seccion3_sub1').hide("slow");
			$('#seccion3_sub1_1').hide("slow");
			$('#seccion3_sub1_2').hide("slow");
			$('#seccion3_sub2_1').hide("slow");
			$('#seccion3_sub3_1').hide("slow");
			$('#seccion4').hide("slow");
			$('#seccion4_sub1').hide("slow");
			$('#seccion4_sub1_1').hide("slow");
			$('#seccion4_sub2_1').hide("slow");
			$('#seccion4_sub3_1').hide("slow");
			$('#seccion5').hide("slow");
			$('#seccion5_sub1').hide("slow");
			$('#seccion5_sub2').hide("slow");
			$('#seccion5_sub3').hide("slow");
		}
	}
</script>