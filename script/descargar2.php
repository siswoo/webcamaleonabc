<?php
session_start();
include('conexion.php');
include('conexion2.php');
require '../resources/Spreadsheet/autoload.php';
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
$fecha_creacion = date('Y-m-d');

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$fila = 1;
$limit = $_GET["cantidad"];
$texto = $_GET["texto"];
$tabla = $_GET["tabla"];

$desde = '';
$hasta = '';


if($tabla=='pasantes' or $tabla=='modelos'){
	$sql1 = "SELECT * FROM ".$tabla." ORDER BY id ASC";	
	$proceso1 = mysqli_query($conexion2,$sql1);
}else{
	$sql1 = "SELECT id,telefono FROM ".$tabla." WHERE hablame = 1 ORDER BY id ASC LIMIT ".$limit;
	$proceso1 = mysqli_query($conexion,$sql1);
}

$contador1 = mysqli_num_rows($proceso1);

while($row1 = mysqli_fetch_array($proceso1)) {
	$id = $row1['id'];

	if($tabla=='pasantes' or $tabla=='modelos'){
		$telefono = $row1['telefono1'];
	}else{
		$telefono = $row1['telefono'];
	}

	if($desde==''){
		$desde = $id;
	}

	$telefono = str_replace(' ','',$telefono);
	$cantidad = strlen($telefono);

	if($tabla!='pasantes' and $tabla!='modelos'){
		if($cantidad!=10){
			$sql2 = "INSERT INTO malos1 (id,fecha_creacion) VALUES ($id,'$fecha_creacion')";
			$proceso2 = mysqli_query($conexion,$sql2);
		}else{
			$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
			$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(300);
			$sheet->setCellValue('A'.$fila, $telefono);
			$sheet->setCellValue('B'.$fila, $texto);
			$fila = $fila+1;
		}
		$sql3 = "UPDATE ".$tabla." SET hablame = 2 WHERE id = ".$id;
		$proceso3 = mysqli_query($conexion,$sql3);
	}else{
		if($cantidad==10 and is_numeric($telefono)){
			$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
			$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(300);
			$sheet->setCellValue('A'.$fila, $telefono);
			$sheet->setCellValue('B'.$fila, $texto);
			$fila = $fila+1;
		}
	}

}

$hasta = $id;

if($tabla!='pasantes' and $tabla!='modelos'){
	$sql4 = "INSERT INTO rollback1 (fuente,desde,hasta,fecha_creacion) VALUES ('$tabla','$desde','$hasta','$fecha_creacion')";
	$proceso4 = mysqli_query($conexion,$sql4);
}


$fecha_creacion1 = date('Y-m-d');
$writer = new Xlsx($spreadsheet);
$writer->save('../resources/descargas '.$fecha_creacion1.'.xlsx');
header("Location: ../resources/descargas ".$fecha_creacion1.".xlsx");

?>