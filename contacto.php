<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link href="resources/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contacto.css">
    <title>WebCamaleonAbc</title>
  </head>
<body>

<?php
$ubicacion='contacto';
include("script/conexion.php");
include("header.php");
?>

<div class="container seccion1">
  <div class="row">
    <div class="col-12 mt-3 mb-3" style="font-size: 45px; font-weight: bold; color: white;">
      Contacto
    </div>
    <div class="col-12" style="color: white; font-size: 22px;">
      Camaleón Models Group <br>
      Bogotá <br>
      Tel: 317 492 2224 <br>
      E-mail: contactomodels@webcamaleonabc.com
    </div>
    <form action="#" method="POST">
      <div class="container">
        <div class="row">
          <div class="col-12 mt-2">
            <hr style="height: 2px; width: 100%; background-color: white;">
          </div>
          <div class="col-12 mt-1 mb-3" style="font-size: 30px; font-weight: bold; color: white;">FORMULARIO DE CONTACTO</div>
          <div class="col-6 mt-1">
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre:" required>
          </div>
          <div class="col-6 mt-1"> 
            <input type="email" id="correo" name="correo" class="form-control" placeholder="E-mail:" required>
          </div>
          <div class="col-6 mt-1">
            <input type="number" id="telefono" name="telefono" class="form-control" placeholder="Teléfono:" required>
          </div>
          <div class="col-6 mt-1"> 
            <input type="number" id="edad" name="edad" class="form-control" placeholder="Edad:" required>
          </div>
          <div class="col-12 mt-2">
            <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje:"></textarea required>
          </div>
          <div class="col-12 text-center mt-2">
            <button type="button" id="Enviar" name="Enviar" class="btn btn-primary" style="font-weight: bold; font-size: 22px;">Enviar</button>
          </div>
          <div class="col-12 mt-2 mb-2">
            <hr style="height: 2px; width: 100%; background-color: white;">
          </div>
        </div>
      </div>
    </form>
  </div>
</div>


<?php
include("footer.php");
?>

</body>
</html>

<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>

<script>
  $('#carouselExampleIndicators').carousel({
      interval: 2000
  })
</script>