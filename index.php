<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv='cache-control' content='no-cache'>
		<meta http-equiv='expires' content='0'>
    <link rel="icon" type="image/png" href="img/favicon1.webp">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link href="resources/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>WebCamaleonAbc</title>
  </head>
<body>

<?php
$ubicacion='Inicio';
include("script/conexion.php");
include("header.php");
?>

<div class="seccion1">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
	  		
	  	<div class="carousel-inner">
	    	<div class="carousel-item active">
	    		<a href="paso-a-paso.php">
	      		<img class="d-block w-100 h-100" src="img/sliders/pasoapaso1.jpeg" alt="Primer slider" style="max-height: 600px;">
	      	</a>
	    	</div>
	    	<div class="carousel-item">
	      		<img class="d-block w-100 h-100" src="img/sliders/slider13.webp" alt="Segundo slider" style="max-height: 600px;">
	    	</div>
	    	<div class="carousel-item">
	      		<img class="d-block w-100 h-100" src="img/sliders/slider2.webp" alt="Tercer slider" style="max-height: 600px;">
	    	</div>
	    	<div class="carousel-item">
	      		<img class="d-block w-100 h-100" src="img/sliders/slider3.webp" alt="Cuarto slider" style="max-height: 600px;">
	    	</div>
	  	</div>
	  		
	  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
	  	</a>
	  		
	  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
	  	</a>
	</div>
</div>

<div class="seccion2">
	<div class="container" style="padding-top: 5rem; padding-bottom: 2rem;">
		<div class="row">
			<div class="col-12 col-md-6 text-center">
				<img src="img/img1.webp" class="img-fluid" style="width: 320px;">
			</div>
			<div class="col-12 col-md-6 text-justify">
				<p class="seccion2_titulo1"><strong>TRABAJA</strong> COMO</p>
				<p class="seccion2_titulo1">MODELO <strong>WEB CAM</strong></p>
				<p class="seccion2_texto1">Bienvenidos a Camaleón Models Group.</p>
				<p class="seccion2_texto1">Una compañía multinacional legalmente constituida con amplia experiencia en la industria del entretenimiento para adultos. Estamos comprometidos con el crecimiento personal y profesional de nuestras modelos, por eso contamos con un equipo especializado en todas las áreas, tecnología de punta e instalaciones de lujo.</p>
			</div>
		</div>
	</div>
</div>

<div class="seccion3">
	<div class="container" style="padding-top: 2rem;">
		<div class="row">
			<div class="col-12 col-md-6 text-justify mt-3">
				<p class="seccion3_titulo1"><strong>PROCESO DE VINCULACIÓN</strong></p>
				<p class="seccion3_texto1">Para participar en nuestro proceso de selección, debes comunicarte con nosotros en los diferentes canales habilitados, escribir a través del link de WhatsApp o el formulario de vinculación. </p>
				<p class="seccion3_titulo2 text-center">
					<a href="contacto.php" class="seccion3_a1">
						<button type="button" class="btn btn-primary" style="font-size: 30px;">CLIC AQUÍ</button>
					</a>
				</p>
			</div>
			<div class="col-12 col-md-6 text-center">
				<img src="img/img2.webp" class="img-fluid" style="width: 420px;">
			</div>
		</div>
	</div>
</div>

<div class="seccion4">
	<div class="container" style="padding-top: 2rem;">
		<div class="row">
			<div class="col-12 col-md-12 text-center mt-3">
				<p class="seccion4_titulo1">Nuestros Beneficios</p>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
				<img src="img/img3.webp" class="img-fluid seccion4_img1">
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4" style="margin-top: 3rem;">
				<div class="row">
					<div class="col-2 text-center ml-3" style="display: flex;align-items: center;flex-wrap: wrap;">	
						<img src="img/icons/IN1-01.webp" class="img-fluid">
					</div>
					<div class="seccion4_texto1 col-9">
						No necesitas experiencia
					</div>
				</div>
				<div class="row">
					<div class="col-2 text-center ml-3" style="display: flex;align-items: center;flex-wrap: wrap;">
						<img src="img/icons/IN2-01.webp" class="img-fluid">
					</div>
					<div class="seccion4_texto1 col-9">
						Soporte 24/7 de nuestros expertos.
					</div>
				</div>
				<div class="row">
					<div class="col-2 text-center ml-3" style="display: flex;align-items: center;flex-wrap: wrap;">
						<img src="img/icons/IN3-01.webp" class="img-fluid">
					</div>
					<div class="seccion4_texto1 col-9">
						Bloqueamos el país que desees.
					</div>
				</div>
				<div class="row">
					<div class="col-2 text-center ml-3" style="display: flex;align-items: center;flex-wrap: wrap;">
						<img src="img/icons/IN4-01.webp" class="img-fluid">
					</div>
					<div class="seccion4_texto1 col-9">
						Transmisión en 12 páginas diferentes.
					</div>
				</div>
				<div class="row">
					<div class="col-2 text-center ml-3" style="display: flex;align-items: center;flex-wrap: wrap;">
						<img src="img/icons/IN5-01.webp" class="img-fluid">
					</div>
					<div class="seccion4_texto1 col-9">
						No se requiere saber un segundo idioma.
					</div>
				</div>
				<div class="row">
					<div class="col-2 text-center ml-3" style="display: flex;align-items: center;flex-wrap: wrap;">
						<img src="img/icons/IN6-01.webp" class="img-fluid">
					</div>
					<div class="seccion4_texto1 col-9">
						Pagos oportunos y afiliación a seguridad social.
					</div>
				</div>
				<div class="row">
					<div class="col-2 text-center ml-3" style="display: flex;align-items: center;flex-wrap: wrap;">
						<img src="img/icons/IN7-01.webp" class="img-fluid">
					</div>
					<div class="seccion4_texto1 col-9">
						Horarios flexibles y zonas adecuadas para transmitir.
					</div>
				</div>
				<div class="row">
					<div class="col-2 text-center ml-3" style="display: flex;align-items: center;flex-wrap: wrap;">	
						<img src="img/icons/IN8-01.webp" class="img-fluid">
					</div>
					<div class="seccion4_texto1 col-9">	
						Somos la compañia con mayor cobertura en Latinoamérica.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="seccion5" style="margin-top: 4rem; margin-bottom: 4rem;">
	<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel2">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
		</ol>
	  		
	  	<div class="carousel-inner">
	    	<div class="carousel-item active">
	    		<div class="row text-center">
		    		<div class="col-4">
		    			<img src="img/paginas/CHATURBATE.webp" alt="Primer slider" style="width: 350px;">
		    		</div>
		    		<div class="col-3">
		    			<img src="img/paginas/MYFREECAMS.webp" alt="Segundo slider" style="width: 350px;">
		    		</div>
		    		<div class="col-4">
		    			<img src="img/paginas/CAMSODA.webp" alt="Tercer slider" style="width: 350px;">
		    		</div>
	    		</div>
	    	</div>
	    	<div class="carousel-item">
	      		<div class="row text-center">
		    		<div class="col-4">
		    			<img src="img/paginas/BONGAPNG.webp" alt="Cuarto slider" style="width: 350px;">
		    		</div>
		    		<div class="col-3">
		    			<img src="img/paginas/STRP-CHATR.webp" alt="Quinto slider" style="width: 350px;">
		    		</div>
		    		<div class="col-4">
		    			<img src="img/paginas/cam4.webp" alt="Sexto slider" style="width: 350px;">
		    		</div>
	    		</div>
	    	</div>
	    	<div class="carousel-item">
	      		<div class="row text-center">
		    		<div class="col-4">
		    			<img src="img/paginas/STREAMATE.webp" alt="Cuarto slider" style="width: 350px;">
		    		</div>
		    		<div class="col-3">
		    			<img src="img/paginas/FLIT4.webp" alt="Quinto slider" style="width: 350px;">
		    		</div>
		    		<div class="col-4">
		    			<img src="img/paginas/LIVEJASMIN.webp" alt="Sexto slider" style="width: 350px;">
		    		</div>
	    		</div>
	    	</div>
	    	<div class="carousel-item">
	      		<div class="row text-center">
		    		<div class="col-6">
		    			<img src="img/paginas/IMLIVE.webp" alt="Cuarto slider" style="width: 450px;">
		    		</div>
		    		<div class="col-6">
		    			<img src="img/paginas/XLOVECAMPONG.webp" alt="Quinto slider" style="width: 450px;">
		    		</div>
	    		</div>
	    	</div>
	  	</div>
	  		
	  	<a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
	    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
	  	</a>
	  		
	  	<a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
	    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
	  	</a>
	</div>
</div>

<?php
include("footer.php");
?>

<!-- Modal 1 -->
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-12 text-center" style="font-size: 21px; font-weight: bold;">
							TRABAJA COMO MODELO WEB CAM
						</div>
						<div class="col-12 text-justify mt-3" style="font-size: 18px; padding-left: 2rem; padding-right: 3rem;">
							Bienvenidos a Camaleón Models.
							<br>
							Una compañía multinacional legalmente constituida con amplia experiencia en la industria del entretenimiento para adultos. Nuestro compromiso con el crecimiento personal y profesional de nuestras modelos es nuestra prioridad, por eso contamos con un equipo especializado en todas las áreas, tecnología de punta e instalaciones de lujo, para que logres los mejores resultados.
						</div>
					</div>
				</div>
				<div class="modal-footer">
				    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			    </div>
	    	</div>
	  	</div>
	</div>
<!-- FIN Modal 1 -->


</body>
</html>

<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>

<script>
	$('#carouselExampleIndicators2').carousel({
  		interval: 2000
	})
</script>