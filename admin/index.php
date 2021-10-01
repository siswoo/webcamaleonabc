<?php
@session_start();
@session_destroy();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../img/favicon1.webp">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
    <link href="../resources/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <title>WebCamaleonAbc</title>
  </head>
<body>

<div class="container mt-3">
	<form action="login.php" method="POST" id="formulario1">
	<div class="row">
		<div class="col-12 text-center" style="font-weight: bold; font-size: 36px;">
			INGRESO
		</div>
		<div class="col-12 form-group form-check">
			<label for="usuario">Usuario</label>
			<input type="text" name="usuario" id="usuario" class="form-control" autocomplete="off" required>
		</div>
		<div class="col-12 form-group form-check">
			<label for="password">Clave</label>
			<input type="password" name="password" id="password" class="form-control" autocomplete="off" required>
		</div>
		<div class="col-12 text-center">
			<button type="submit" id="submit1" class="btn btn-success">Ingresar</button>
		</div>
	</div>
</div>

</body>
</html>

<script src="../js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script src="../js/bootstrap.js"></script>