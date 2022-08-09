<!DOCTYPE html>
<html lang="es">
<html>
<head>
	<title>Convertidor de Imagenes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container">
	<form id="uploadForm" enctype="multipart/form-data">
		<div class="row">
			<div class="col-12" style="font-size: 36px; font-weight: bold;">Imagen a Convertir</div>
			<div class="col-8 mt-3">
				<input type="hidden" id="condicion" name="condicion" value="convertir1">
				<input type="file" class="form-control" id="images" name="images[]" multiple>
			</div>
			<div class="col-4 mt-3">
				<select class="form-control" id="calidad" name="calidad">
					<option value="10">10%</option>
					<option value="20">20%</option>
					<option value="30">30%</option>
					<option value="40">40%</option>
					<option value="50">50%</option>
					<option value="60">60%</option>
					<option value="70">70%</option>
					<option value="80">80%</option>
					<option value="90">90%</option>
					<option value="100" selected="selected">100%</option>
				</select>
			</div>
			<div class="col-12 mt-3 text-right">
				<button type="submit" class="btn btn-primary" id="submit1" name="submit1">Convertir Imagen</button>
			</div>
			<div class="col-12 mt-3" style="font-size: 14px; font-weight: bold;">Desarrollado por Juan Maldonado 2021</div>
		</div>
	</form>
</div>

<div class="col-12 text-center mt-3">
	<div id="uploadStatus"></div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12 text-center" style="font-size: 28px; font-weight: bold;">Galeria</div>
	</div>
	<div class="row" id="galeria"></div>
</div>

</body>
</html>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">
	$(document).ready(function(){

		mostrar1();

		$("#uploadForm").on('submit', function(e){
	        e.preventDefault();
	        $.ajax({
	            type: 'POST',
	            url: 'script/crud_convertir.php',
	            data: new FormData(this),
	            dataType: "JSON",
	            contentType: false,
	            cache: false,
	            processData:false,

	            beforeSend: function(){
	                $('#uploadStatus').html('<img src="img/gifs/cargando1.gif"/>');
	            },

	            success: function(respuesta){
	            	//console.log(respuesta);
	                window.location.href = "convertir1.php";
	            },

	            error:function(respuesta){
	            	console.log(respuesta["responseText"]);
	                $('#uploadStatus').html('<span style="color:#EA4335;">Images upload failed, please try again.<span>');
	            },
	        });
	    });
	});

	function mostrar1(){
		$.ajax({
			type: 'POST',
			url: 'script/crud_convertir.php',
			dataType: "JSON",
			data: {
				"condicion": "mostrar1",
			},

	        beforeSend: function(){},

	        success: function(respuesta){
				console.log(respuesta);
	            $('#galeria').html(respuesta["archivos"]);
	        },

	        error:function(respuesta){
				console.log(respuesta["responseText"]);
	        },
	    });
	}

	function eliminar1(value){
		console.log(value);
		Swal.fire({
			title: 'Estas seguro?',
			text: "Luego no podrás revertir esta acción",
			icon: 'warning',
			showConfirmButton: true,
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, Eliminar archivo!',
			cancelButtonText: 'Cancelar'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					type: 'POST',
					url: 'script/crud_convertir.php',
					dataType: "JSON",
					data: {
						"value": value,
						"condicion": "eliminar1",
					},
					success: function(respuesta) {
						console.log(respuesta);
						window.location.href = "convertir1.php";
					},

					error: function(respuesta) {
						console.log(respuesta["responseText"]);
					}
				});
			}
		})
	}

</script>