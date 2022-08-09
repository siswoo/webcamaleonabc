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
		<!--
			<input type="hidden" name="datatables" id="datatables" data-pagina="1" data-consultasporpagina="10" data-filtrado="" data-estatus="">
			<div class="col-3 form-group form-check">
				<label for="consultasporpagina" style="color:black; font-weight: bold;">Consultas por Página</label>
				<select class="form-control" id="consultasporpagina" name="consultasporpagina">
					<option value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
					<option value="50">50</option>
					<option value="100">100</option>
				</select>
			</div>
			<div class="col-3 form-group form-check">
				<label for="buscarfiltro" style="color:black; font-weight: bold;">Buscar</label>
				<input type="text" class="form-control" id="buscarfiltro" name="buscarfiltro">
			</div>
			<div class="col-2 form-group form-check">
				<label for="estatus" style="color:black; font-weight: bold;">Estatus</label>
				<select class="form-control" id="estatus" name="estatus">
					<option value="">Todos</option>
					<option value="1">Proceso</option>
					<option value="2">Listos</option>
				</select>
			</div>
			<div class="col-1">
				<br>
				<button type="button" class="btn btn-info mt-2" onclick="filtrar1();">Filtrar</button>
			</div>
		-->
			<div class="col-12 text-center mb-3" style="border: solid 1px black; border-radius: 1rem;">
				<form id="formulario1" action="../script/descargar2.php" method="GET" target="_blank">
					<select class="form-control mt-3 mb-3" id="cantidad" name="cantidad" required>
						<option value="">Cantidad</option>
						<option value="100">100</option>
						<option value="200">200</option>
						<option value="300">300</option>
						<option value="400">400</option>
						<option value="500">500</option>
					</select>
					<textarea class="form-control mt-3 mb-3" id="texto" name="texto" placeholder="COLOCAR EL TEXTO AQUI" required></textarea>
					<select class="form-control mt-3 mb-3" id="tabla" name="tabla" required>
						<option value="">BASE DE DATOS</option>
						<option value="wix">WIX</option>
						<option value="formulario_contacto1">WEB</option>
						<option value="pasantes">PASANTES</option>
						<option value="modelos">MODELOS</option>
					</select>
					<button type="submit" class="btn btn-success mt-3 mb-3">Descargar Excel</button>
				</form>
			</div>
		</div>
	</div>

<!--<div id="resultado_table1">Aqui!</div>-->

<!------------------------>
<input type="hidden" name="usuario_id" id="usuario_id">
<input type="hidden" name="modelo_id" id="modelo_id">
<!------------------------>

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
		//filtrar1();
		//setInterval('filtrar1()',1000);
	} );

	function filtrar1(){
		var input_consultasporpagina = $('#consultasporpagina').val();
		var input_buscarfiltro = $('#buscarfiltro').val();
		var input_estatus = $('#estatus').val();
		
		$('#datatables').attr({'data-consultasporpagina':input_consultasporpagina})
		$('#datatables').attr({'data-filtrado':input_buscarfiltro})
		$('#datatables').attr({'data-estatus':input_estatus})

		var pagina = $('#datatables').attr('data-pagina');
		var consultasporpagina = $('#datatables').attr('data-consultasporpagina');
		var filtrado = $('#datatables').attr('data-filtrado');
		var estatus = $('#datatables').attr('data-estatus');

		$.ajax({
			type: 'POST',
			url: '../script/crud_contacto.php',
			dataType: "JSON",
			data: {
				"pagina": pagina,
				"consultasporpagina": consultasporpagina,
				"filtrado": filtrado,
				"estatus": estatus,
				"condicion": "table3",
			},

			success: function(respuesta) {
				//console.log(respuesta);
				if(respuesta["estatus"]=="ok"){
					$('#resultado_table1').html(respuesta["html"]);
				}
			},

			error: function(respuesta) {
				console.log(respuesta['responseText']);
			}
		});
	}

	function paginacion1(value){
		$('#datatables').attr({'data-pagina':value})
		filtrar1();
	}

	$('#myModal').on('shown.bs.modal', function () {
	  	$('#myInput').trigger('focus')
	});

	function estatus1(id,estatus){
		$.ajax({
			type: 'POST',
			url: '../script/crud_contacto.php',
			dataType: "JSON",
			data: {
				"id": id,
				"estatus": estatus,
				"condicion": "estatus1",
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







