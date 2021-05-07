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
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

    	<ul class="navbar-nav mr-auto">
			<li class="nav-item <?php if($ubicacion=="contacto"){ echo "active"; }?>">
				<a class="nav-link" style="color: white;font-size: 26px;" href="contacto.php">CONTACTO</a>
			</li>
    	</ul>

    	<ul class="navbar-nav mr-auto">
			<li class="nav-item <?php if($ubicacion=="preguntas"){ echo "active"; }?>">
				<a class="nav-link" style="color: white;font-size: 26px;" href="preguntas.php">PREGUNTAS</a>
			</li>
    	</ul>
  	</div>
</nav>