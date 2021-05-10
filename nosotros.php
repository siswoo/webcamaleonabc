<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link href="resources/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/nosotros.css">
    <title>WebCamaleonAbc</title>
  </head>
<body>

<?php
$ubicacion='nosotros';
include("script/conexion.php");
include("header.php");
?>

<div class="seccion1">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		</ol>
	  		
	  	<div class="carousel-inner">
	    	<div class="carousel-item active">
	      		<img class="d-block w-100 h-100" src="img/sliders/slider13.webp" alt="Segundo slider" style="max-height: 600px;">
	    	</div>
	    	<div class="carousel-item">
	      		<img class="d-block w-100 h-100" src="img/sliders/slider4.webp" alt="Primer slider" style="max-height: 600px;">
	    	</div>
	    	<div class="carousel-item">
	      		<img class="d-block w-100 h-100" src="img/sliders/slider5.webp" alt="Segundo slider" style="max-height: 600px;">
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
	<div class="container" style="padding-top: 1rem; padding-bottom: 2rem;">
		<div class="row">
			<div class="col-12 col-md-12 text-center" style="font-size: 60px; font-weight: bold;">NOSOTROS</div>
			<div class="col-12 col-md-6 text-center mt-3">
				<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
					</ol>
			  	
				  	<div class="carousel-inner">
				    	<div class="carousel-item active">
				      		<img class="d-block w-100 h-100" src="img/sliders/slider8.webp" alt="Primer slider" style="max-height: 600px;">
					    </div>
					   	<div class="carousel-item">
					     	<img class="d-block w-100 h-100" src="img/sliders/slider9.webp" alt="Segundo slider" style="max-height: 600px;">
					   	</div>
					   	<div class="carousel-item">
				      		<img class="d-block w-100 h-100" src="img/sliders/slider10.webp" alt="Tercer slider" style="max-height: 600px;">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100 h-100" src="img/sliders/slider11.webp" alt="Cuarto slider" style="max-height: 600px;">
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
			<div class="col-12 col-md-6 text-justify mt-3">
				<p class="seccion2_titulo1">CAMALEÓN</p>
				<p class="seccion2_texto1">Camaleón es una compañia legalmente constituida con amplia experiencia en la industria del entretenimiento para adultos; teniendo como linea de negocio principal los estudios Webcam y venta de equipo de alta tecnología relacionados con la industria.</p>
				<p class="seccion2_texto1">Con base en nuestra experiencia entendemos que es fundamental contar con el apoyo profesional para nuestros modelos, ya que esto permite aumentar la rentabilidad y productividad en cada una de las páginas de transmisión para ello contamos con 5 departamentos desplegados en los diferentes sedes.</p>
			</div>
		</div>
	</div>
</div>

<div class="seccion3">
	<div class="row mt-3">
	  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3 text-center">
	    <div class="card card-jj1" style="display: block !important;">
	      <div class="col-12 text-center mt-3 mb-3" style="font-weight:bold; font-size:21px;">Sede VIP Occidente</div>
	      <img src="img/VIP.webp" class="img-fluid" style="max-width: 300px; border-radius: 1rem;">
	      <div class="card-body">
	        <h5 class="card-title text-center">
	          <button type="button" data-toggle="modal" data-target="#exampleModal1" onclick="estructura1('VIP');" class="btn btn-primary">Ver Estructura Organizacional</button>
	        </h5>
	      </div>
	    </div>
	  </div>

	  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3 text-center">
	    <div class="card card-jj1" style="display: block !important;">
	      <div class="col-12 text-center mt-3 mb-3" style="font-weight:bold; font-size:21px;">Sede CAV</div>
	      <img src="img/CAV.webp" class="img-fluid" style="max-width: 300px; border-radius: 1rem;">
	      <div class="card-body">
	        <h5 class="card-title text-center">
	          <button type="button" data-toggle="modal" data-target="#exampleModal1" onclick="estructura1('CAV');" class="btn btn-primary">Ver Estructura Organizacional</button>
	        </h5>
	      </div>
	    </div>
	  </div>

	  <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-3 text-center">
	    <div class="card card-jj1" style="display: block !important;">
	      <div class="col-12 text-center mt-3 mb-3" style="font-weight:bold; font-size:21px;">Sede Suba</div>
	      <img src="img/Suba.webp" class="img-fluid" style="max-width: 300px; border-radius: 1rem;">
	      <div class="card-body">
	        <h5 class="card-title text-center">
	          <button type="button" data-toggle="modal" data-target="#exampleModal1" onclick="estructura1('Suba');" class="btn btn-primary">Ver Estructura Organizacional</button>
	        </h5>
	      </div>
	    </div>
	  </div>

	  <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-3 text-center">
	    <div class="card card-jj1" style="display: block !important;">
	      <div class="col-12 text-center mt-3 mb-3" style="font-weight:bold; font-size:21px;">Sede Norte</div>
	      <img src="img/Norte.webp" class="img-fluid" style="max-width: 300px; border-radius: 1rem;">
	      <div class="card-body">
	        <h5 class="card-title text-center">
	          <button type="button" data-toggle="modal" data-target="#exampleModal1" onclick="estructura1('Norte');" class="btn btn-primary">Ver Estructura Organizacional</button>
	        </h5>
	      </div>
	    </div>
	  </div>

	  <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-3 text-center">
	    <div class="card card-jj1" style="display: block !important;">
	      <div class="col-12 text-center mt-3 mb-3" style="font-weight:bold; font-size:21px;">Sede Occidente I</div>
	      <img src="img/Occidente1.webp" class="img-fluid" style="max-width: 300px; border-radius: 1rem;">
	      <div class="card-body">
	        <h5 class="card-title text-center">
	          <button type="button" data-toggle="modal" data-target="#exampleModal1" onclick="estructura1('Occidente1');" class="btn btn-primary">Ver Estructura Organizacional</button>
	        </h5>
	      </div>
	    </div>
	  </div>
	</div>
</div>

<div class="seccion4">
	<div class="container" style="padding-top: 2rem;">
		<div class="row">
			<div class="col-12 col-md-12 text-center mt-3">
				<iframe width="800" height="400" src="https://www.youtube.com/embed/LUuDx2wbSFA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>

<div class="seccion5">
	<div class="container" style="padding-top: 2rem;">
		<div class="row">
			<div class="col-12 text-center">
				<!--<img src="img/organizacional.png" class="img-fluid">-->
			</div>
		</div>
	</div>
</div>

<div class="seccion5" style="margin-top: 1rem;background-color: black; padding-top: 2rem; padding-bottom: 1rem;">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 text-justify">
				<div class="col-12 seccion5_titulo1">MISIÓN</div>
				<div class="col-12 seccion5_texto1">Para el año 2023 Camaleón Models Group será referente profesional en la industria del entretenimiento para adultos en Latinoamerica con una proyección de formalización y estructuración de procesos con mas de 6000 modelos.</div>
				<div class="col-12 seccion5_titulo1" style="margin-top: 2rem;">VISIÓN</div>
				<div class="col-12 seccion5_texto1">Ayudar a nuestras modelos a alcanzar sus metas a través de la profesionalización de su labor mediante nuestro experimentado equipo, brindandoles toda la asistencia tecnológica y capacitación necesaria. Garantizando su éxito personal y profesional por medio de nuestro portafolio de servicios.</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 abs-center">
				<img src="img/logos/logo1.webp" class="img-fluid">
			</div>
		</div>
	</div>
</div>

<?php
include("footer.php");
?>

</body>
</html>

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
            <div class="col-12 text-center" style="font-size: 21px; font-weight: bold;" id="modal1_titulo1"></div>
            <div class="col-12 text-justify mt-3" id="modal1_imagen1"></div>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
  </div>
<!-- FIN Modal 1 -->

<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>

<script>
	$('#carouselExampleIndicators2').carousel({
  		interval: 2000
	})

	function estructura1(value){
	    //console.log(value);
	    if(value=='VIP'){
	      var sede = 'VIP Occidente';
	      var imagen = 'img/img8.webp';
	    }else if(value=='CAV'){
	      var sede = 'CAV';
	      var imagen = 'img/img8.webp';
	    }else if(value=='Suba'){
	      var sede = 'Suba';
	      var imagen = 'img/img8.webp';
	    }else if(value=='Norte'){
	      var sede = 'Norte';
	      var imagen = 'img/img8.webp';
	    }else if(value=='Occidente1'){
	      var sede = 'Occidente I';
	      var imagen = 'img/img8.webp';
	    }else{
	      var sede = 'Sede Sin Definir';
	      var imagen = 'img/img8.webp';
	    }
	    $('#modal1_titulo1').html("Estructura Organizacional de Sede "+sede);
	    $('#modal1_imagen1').html("<img src='"+imagen+"' class='img-fluid'>");
  	}
</script>