<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="img/favicon1.webp">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link href="resources/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>WebCamaleonAbc</title>
  </head>
<body>

	<div class="seccion1 mt-3">
		<form id="formulario1" method="POST" action="#">
	    	<div class="row">
	    		<div class="form-group col-12">
				    <p class="text-center" style="font-weight: bold; font-size: 20px;">Migración de WIX</p>
				</div>
				<div class="form-group col-12">
				    <label for="file">Archivo Generado</label>
				    <input type="file" class="form-control" name="file" id="file" required>
				    <input type="hidden" name="condicion" id="condicion" value="subir1">
				</div>
				<div class="form-group col-12 text-center">
				    <button type="submit" id="formulario1_submit" class="btn btn-primary">Cargar Excel</button>
				</div>
			</div>
		</form>
	</div>

<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">
	$("#formulario1").on("submit", function(e){
		e.preventDefault();
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);
        fd.append('condicion',$('#condicion').val());

        $.ajax({
            url: 'script/migrar1.php',
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,

            beforeSend: function (){
            	$('#formulario1_submit').attr('disabled','true');
            },

            success: function(response){
            	console.log(response);
            	$('#formulario1_submit').removeAttr('disabled');
            	if(response=='error'){
            		Swal.fire({
		 				title: 'Formato Invalido',
			 			text: "Formato Validos -> xls xml xlam xlsx",
			 			icon: 'error',
			 			position: 'center',
			 			showConfirmButton: false,
			 			timer: 3000
					});
            		return false;
            	}else{
            		Swal.fire({
		 				title: 'Guardado exitosamente!',
		 				text: "Limpiando Cache...",
		 				icon: 'success',
		 				position: 'center',
		 				showConfirmButton: true,
		 				timer: 2000
					});
	            	setTimeout(function() {
				      	//window.location.href = "index.php";
				    },2000);
            	}
            },

            error: function(response){
            	console.log(response['responseText']);
            	$('#formulario1_submit').removeAttr('disabled');
            }
        });
    });
</script>