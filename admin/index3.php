<?php
	session_start();
	if(!isset($_SESSION['login_id'])){
		header("Location: index.php");
		exit;
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../img/favicon1.webp">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="../resources/fontawesome/css/all.css" rel="stylesheet">
    <title>WebCamaleonAbc</title>
  </head>
<body>
<?php
	include('../script/conexion.php');
	include("opciones.php");
?>

<div class="container mt-3">
	<div class="row">
		<div class="col-12 text-center">
			<a href="index2.php">
				<button class="btn btn-info">Listado Web</button>
			</a>
			<a href="index3.php">
				<button class="btn btn-info">WhatsApp</button>
			</a>
			<a href="index4.php">
				<button class="btn btn-info">Listado Wix</button>
			</a>
		</div>
		</div>
	</div>
</div>

<div class="container mt-3">
	<div class="row">
		<!--
		<div class="col-12 form-group form-check">
			<label for="opcion1" style="color:black; font-weight: bold;">Formulario Web</label>
			<input type="text" id="opcion1" name="opcion1" class="form-control" required>
		</div>
		-->
		<input type="hidden" id="opcion1" name="opcion1" class="form-control" required>
		<div class="col-12 form-group form-check">
			<label for="opcion2" style="color:black; font-weight: bold;">Icono Whatsapp Web</label>
			<input type="text" id="opcion2" name="opcion2" class="form-control" required>
		</div>
		<div class="col-12 text-center">
			<button type="button" class="btn btn-success" onclick="actualizar2();">Actualizar</button>
		</div>
	</div>
</div>

</body>
</html>

<script src="../js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">

	$(document).ready(function() {
		filtrar1();
		setInterval('filtrar1()',20000);
	});

	function filtrar1(){
		$.ajax({
			type: 'POST',
			url: '../script/crud_whatsapp.php',
			dataType: "JSON",
			data: {
				"condicion": "consultar1",
			},

			success: function(respuesta) {
				//console.log(respuesta);
				if(respuesta["estatus"]=="ok"){
					$('#opcion1').val(respuesta["opcion1"]);
					$('#opcion2').val(respuesta["opcion2"]);
				}
			},

			error: function(respuesta) {
				console.log(respuesta['responseText']);
			}
		});
	}

	function actualizar2(){
		var opcion1 = $('#opcion1').val();
		var opcion2 = $('#opcion2').val();

		$.ajax({
			type: 'POST',
			url: '../script/crud_whatsapp.php',
			dataType: "JSON",
			data: {
				"opcion1": opcion1,
				"opcion2": opcion2,
				"condicion": "actualizar2",
			},

			success: function(respuesta) {
				console.log(respuesta);
				if(respuesta["estatus"]=="ok"){
					Swal.fire({
						title: 'Correcto!',
						text: respuesta["msg"],
						icon: 'success',
					})
				}else if(respuesta["estatus"]=="error"){
					Swal.fire({
						title: 'Error',
						text: respuesta["msg"],
						icon: 'error',
					})
				}
			},

			error: function(respuesta) {
				console.log(respuesta['responseText']);
			}
		});
	}
</script>







