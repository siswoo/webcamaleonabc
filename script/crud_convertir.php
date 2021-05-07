<?php
include("conexion.php");
$condicion = $_POST["condicion"];

if($condicion=='convertir1'){

	$targetDir = "../img/convertidos1/";
    $allowTypes = array('jpg','png','jpeg');
    $calidad = $_POST["calidad"];
    
    $images_arr = array();

    function convertirWebp($source, $destination, $extension, $quality) {
		if ($extension == 'jpeg' || $extension == 'jpg'){
			$image = imagecreatefromjpeg($source);
		}elseif ($extension == 'gif'){
			$image = imagecreatefromgif($source);
		}elseif ($extension == 'png'){
			$image = imagecreatefrompng($source);
		}
		return imagewebp($image, $destination, $quality);
	}

	$archivos = '';
	$contador1 = count($_FILES['images']['name']);
	$contador1 = $contador1-1;

    for($key=0;$key<=$contador1;$key++){
    	$imagen_nombre = $_FILES['images']['name'][$key];
        $imagen_temporal = $_FILES['images']['tmp_name'][$key];
        $imagen_type = $_FILES['images']['type'][$key];
        $extension = explode("/", $imagen_type);
        $extension = $extension[1];
		$imagen_nombre2 = explode(".", $imagen_nombre);

        $fileName = basename($_FILES['images']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;

        $new_name = rand().'.'.$imagen_nombre;
		$sourcePath = $_FILES["images"]["tmp_name"][$key];
		$ruta = "../img/convertidos1/".$new_name;
		move_uploaded_file($sourcePath, $ruta);

		$destino = "../img/convertidos1/".$imagen_nombre2[0].".webp";
		convertirWebp($ruta,$destino,$extension,$calidad);
		unlink($ruta);
    }

    $folder_path = '../img/convertidos1/';
    $folder_path2 = 'img/convertidos1/';
	$num_files = glob($folder_path . "*.{JPG,jpeg,webp,png,bmp}", GLOB_BRACE);
	$folder = opendir($folder_path);

	if($num_files > 0){
		while(false !== ($file = readdir($folder)))  {
	  		$file_path = $folder_path2.$file;
	  		$extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
	  		if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'webp') {
	   			$archivos .= "<img src='".$file_path."' style='width:150px;'>"; 
	  		}
		}
	}

	closedir($folder);

    $datos = [
		"estatus" => 'ok',
		"archivos" => $archivos,
	];

	echo json_encode($datos);
}

if($condicion=='mostrar1'){
	$archivos = '';
	$folder_path = '../img/convertidos1/';
    $folder_path2 = 'img/convertidos1/';
	$num_files = glob($folder_path . "*.{JPG,jpeg,webp,png,bmp}", GLOB_BRACE);
	$folder = opendir($folder_path);

	if($num_files > 0){
		while(false !== ($file = readdir($folder)))  {
	  		$file_path = $folder_path2.$file;
	  		$extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
	  		if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'webp') {
	   			$archivos .= '
	   				<div class="col-3 mt-2 text-center" id="div_'.$file_path.'">
						<img src="'.$file_path.'" class="img-fluid" style="width:150px; max-width: 150px; max-height: 150px;">
						<p>
							<a href="descargar1.php?archivo='.$file_path.'" target="_blank">
								<button type="button" class="btn btn-primary mt-1" value="'.$file_path.'">Descargar</button>
							</a>
							<button type="button" class="btn btn-danger mt-1" value="'.$file_path.'" onclick="eliminar1(value);">Eliminar</button>
						</p>
					</div>
	   			';
	  		}
		}
	}

	closedir($folder);

	$datos = [
		"estatus" => 'ok',
		"archivos" => $archivos,
	];

	echo json_encode($datos);
}

if($condicion=='eliminar1'){
	$archivo = "../".$_POST["value"];
	unlink($archivo);
	$datos = [
		"estatus" => 'ok',
	];

	echo json_encode($datos);
}

?>