<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HB33BZ8H9V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HB33BZ8H9V');
</script>

<style type="text/css">
	.custom-toggler .navbar-toggler-icon {
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
	}

	.custom-toggler.navbar-toggler {
		border-color: rgb(255,102,203);
	}
</style>

<nav class="navbar navbar-expand-lg navbar" style="background-color: black;">
	<?php if($ubicacion=="Inicio"){ ?>
		<a class="navbar-brand" href="index.php">
			<img src="img/logos/logo1.webp" style="width: 370px; margin-right: 4rem;" class="img-fluid">
		</a>
	<?php }else{ ?>
		<a class="navbar-brand" href="index.php">
			<img src="img/logos/logo1.webp" style="width: 370px; margin-right: 4rem;" class="img-fluid">
		</a>
	<?php } ?>
	<button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
   		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item <?php if($ubicacion=="Inicio"){ echo "active"; }?>">
				<a class="nav-link" style="color: white;font-size: 26px;" href="index.php">INICIO</a>
			</li>
    	</ul>

    	<ul class="navbar-nav mr-auto">
			<li class="nav-item <?php if($ubicacion=="nosotros"){ echo "active"; }?>">
				<a class="nav-link" style="color: white;font-size: 26px;" href="nosotros.php">NOSOTROS</a>
			</li>
    	</ul>
    	<!--
    	<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown <?php if($ubicacion=="multimedia"){ echo "active"; }?>">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;font-size: 26px;" href="multimedia.php">MULTIMEDIA</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="cursor: pointer;">
					<a class="dropdown-item" style="font-size: 20px; font-weight: bold;" href="galeria.php">Galería</a>
					<a class="dropdown-item" style="font-size: 20px; font-weight: bold;" href="articulo.php">Artículo</a>
					<a class="dropdown-item" style="font-size: 20px; font-weight: bold;" href="noticias.php">Noticias</a>
				</div>
			</li>
    	</ul>
    	-->

    	<ul class="navbar-nav mr-auto">
			<li class="nav-item <?php if($ubicacion=="galeria"){ echo "active"; }?>">
				<a class="nav-link" style="color: white;font-size: 26px;" href="galeria.php">GALERIA</a>
			</li>
    	</ul>

    	<ul class="navbar-nav mr-auto">
			<li class="nav-item <?php if($ubicacion=="contacto"){ echo "active"; }?>">
				<a class="nav-link" style="color: white;font-size: 26px;" href="contacto.php">CONTACTO</a>
			</li>
    	</ul>

    	<ul class="navbar-nav mr-auto" style="display: none;">
			<li class="nav-item <?php if($ubicacion=="preguntas"){ echo "active"; }?>">
				<a class="nav-link" style="color: white;font-size: 26px;" href="preguntas.php">PREGUNTAS</a>
			</li>
    	</ul>
  	</div>
</nav>
