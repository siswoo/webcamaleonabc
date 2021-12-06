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
		<input type="hidden" name="datatables" id="datatables" data-pagina="1" data-consultasporpagina="10" data-filtrado="" data-sede="">
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
			<label for="consultasporpagina" style="color:black; font-weight: bold;">Estatus</label>
			<select class="form-control" id="consultasporpagina" name="consultasporpagina">
				<option value="">Todos</option>
				<option value="2">Activos</option>
				<option value="3">Inactivos</option>
			</select>
		</div>
		<div class="col-1">
			<br>
			<button type="button" class="btn btn-info mt-2" onclick="filtrar1();">Filtrar</button>
		</div>
		<div class="col-2">
			<br>
				<button type="button" class="btn btn-info mt-2" data-toggle="modal" data-target="#descargar1">Descargar</button>
		</div>
	</div>
</div>

<div id="resultado_table1">Aqui!</div>

<!------------------------>
<input type="hidden" name="usuario_id" id="usuario_id">
<input type="hidden" name="modelo_id" id="modelo_id">
<!------------------------>

<!-- Modal Editar Bancarios -->
	<div class="modal fade" id="descargar1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="../script/wix1.php" method="POST" id="descargar1_form" style="">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Peticiones</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					    <div class="row">
					    	<input type="hidden" name="peticion1_id" id="peticion1_id" value="">
						    <div class="col-3">No Enviados: </div>
						    <div class="col-6" id="no_enviados1"></div>
						    <div class="col-12 text-center mt-2">
						    	<label for="texto" style="font-weight: bold;">Texto</label>
						    	<textarea id="texto" name="texto" class="form-control" required></textarea>
						    </div>
						</div>
					</div>
					<div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				        <button type="submit" class="btn btn-success" id="descargar1_submit">Descargar</button>
			      	</div>
			    </div>
		      </form>
	    </div>
	</div>
<!-- FIN Modal Editar Bancarios -->

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
		noEnviados();
		setInterval('filtrar1()',3000);
		setInterval('noEnviados()',2000);

		$(function () {
			$('[data-toggle="popover"]').popover()
		})

	} );

	function filtrar1(){
		var input_consultasporpagina = $('#consultasporpagina').val();
		var input_buscarfiltro = $('#buscarfiltro').val();
		
		$('#datatables').attr({'data-consultasporpagina':input_consultasporpagina})
		$('#datatables').attr({'data-filtrado':input_buscarfiltro})

		var pagina = $('#datatables').attr('data-pagina');
		var consultasporpagina = $('#datatables').attr('data-consultasporpagina');
		var filtrado = $('#datatables').attr('data-filtrado');

		$.ajax({
			type: 'POST',
			url: '../script/crud_contacto.php',
			dataType: "JSON",
			data: {
				"pagina": pagina,
				"consultasporpagina": consultasporpagina,
				"filtrado": filtrado,
				"condicion": "table2",
			},

			success: function(respuesta) {
				console.log(respuesta);
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
				"condicion": "estatus2",
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

	function noEnviados(){
		$.ajax({
			type: 'POST',
			url: '../script/crud_contacto.php',
			dataType: "JSON",
			data: {
				"condicion": "noenviados1",
			},

			success: function(respuesta) {
				//console.log(respuesta);
				if(respuesta["estatus"]=="ok"){
					$('#no_enviados1').html(respuesta["contador"]);
				}
			},

			error: function(respuesta) {
				console.log(respuesta['responseText']);
			}
		});
	}
</script>







