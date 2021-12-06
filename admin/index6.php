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
			<div class="col-12 text-center mb-3" style="border: solid 1px black; border-radius: 1rem;">
				<form id="formulario1" action="../script/descargar3.php" method="GET" target="_blank">
					<select class="form-control mt-3 mb-3" id="cantidad" name="cantidad" required>
						<option value="">Cantidad</option>
						<option value="100">100</option>
						<option value="200">200</option>
						<option value="300">300</option>
						<option value="400">400</option>
						<option value="500">500</option>
					</select>
					<select class="form-control mt-3 mb-3" id="tabla" name="tabla" required>
						<option value="">BASE DE DATOS</option>
						<option value="wix">WIX</option>
						<option value="formulario_contacto1">WEB</option>
					</select>
					<button type="submit" class="btn btn-success mt-3 mb-3">Descargar Excel</button>
				</form>
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
