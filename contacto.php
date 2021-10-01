<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="img/favicon1.webp">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link href="resources/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contacto.css">
    <title>WebCamaleonAbc</title>
  </head>
<body>

<style type="text/css">
  input[type="radio"], input[type="checkbox"] {
    box-sizing: border-box;
    padding: 0;
  }
  
  .custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
  }

  .custom-control {
    position: relative;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    min-height: 1.5rem;
    padding-left: 1.5rem;
    margin-right: 1rem;
    cursor: pointer;
  }

  .custom-control {
    position: relative;
    z-index: 1;
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5rem;
  }
</style>

<?php
$ubicacion='contacto';
include("script/conexion.php");
include("header.php");
?>

<div class="container seccion2">
  <div class="row">
    <form action="#" method="POST" id="formulario1">
      <div class="container">
        <div class="row">
          <div class="col-12 mt-2">
            <hr style="height: 2px; width: 100%; background-color: white;">
          </div>
          <input type="hidden" id="condicion" name="condicion" value="contacto1">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-12 text-center mt-1 mb-3" style="font-size: 30px; font-weight: bold; color: white;">FORMULARIO DE CONTACTO</div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 mt-1">
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre:" autocomplete="off" style="border: 2px solid black; font-size: 20px; font-weight: bold; color: black;" required>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 mt-1">
            <input type="email" id="correo" name="correo" class="form-control" placeholder="E-mail:" autocomplete="off" style="border: 2px solid black; font-size: 20px; font-weight: bold; color: black;" required>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 mt-1">
            <input type="number" id="telefono" name="telefono" class="form-control" placeholder="Teléfono:" autocomplete="off" style="border: 2px solid black; font-size: 20px; font-weight: bold; color: black;" required>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-6 mt-1"> 
            <input type="number" id="edad" name="edad" class="form-control" placeholder="Edad:" autocomplete="off" style="border: 2px solid black; font-size: 20px; font-weight: bold; color: black;" required>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-12 mt-2">
            <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje:" style="border: 2px solid black; font-size: 20px; font-weight: bold; color: black;" autocomplete="off" required></textarea>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-12 text-center" style="font-weight: bold; font-size: 20px; color: white; cursor: pointer;">
            <input type="checkbox" class="form-check-input" id="tyc" style="margin-top: 10px;">
            <label class="form-check-label" for="tyc" style="cursor: pointer;">Estoy de acuerdo con los <a href="https://shop.camaleonmg.com/terminosycondiciones.php" target="_blank">Términos y condiciones</a></label>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-12 text-center mt-2">
            <button type="submit" id="Enviar" name="Enviar" class="btn btn-primary" style="font-weight: bold; font-size: 22px;">Enviar</button>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-12 mt-2 mb-2">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>

/******************TEST******************/
  $(document).ready(function() {
    /*
    $('#nombre').val('Juan Maldonado');
    $('#correo').val('juanmaldonado.co@gmail.com');
    $('#telefono').val('3016984868');
    $('#edad').val('27');
    $('#mensaje').val('Este es un mensaje de pruebas.');
    */
  });
  /****************************************/

  $('#carouselExampleIndicators').carousel({
      interval: 2000
  });

  $("#formulario1").on("submit", function(e){
    e.preventDefault();
    var tyc = document.getElementById('tyc').checked;

    if(tyc==false){
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Debe estar de acuerdo con los términos y condiciones!',
        showConfirmButton: true,
      });
      return false;
    }

    var f = $(this);
      $.ajax({
      type: 'POST',
      url: 'script/crud_contacto.php',
      data: $('#formulario1').serialize(),
      dataType: "JSON",

      success: function(respuesta) {
        console.log(respuesta);
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Se ha enviado la información correctamente!',
          showConfirmButton: false,
          timer: 3000
        });

        $('#nombre').val('');
        $('#correo').val('');
        $('#telefono').val('');
        $('#edad').val('');
        $('#mensaje').val('');
      },

      error: function(respuesta) {
        console.log(respuesta['responseText']);
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Ha ocurrido un error, estamos trabajando para arreglarlo!',
          showConfirmButton: false,
          timer: 3000
        });
      }
    });
  });

</script>