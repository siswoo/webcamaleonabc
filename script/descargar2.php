<?php
session_start();
include('conexion.php');
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

$sql1 = "SELECT id,telefono FROM ".$tabla." WHERE hablame = 1 ORDER BY id ASC LIMIT ".$limit;
$consulta1 = mysqli_query($conexion,$sql1);
while($row1 = mysqli_fetch_array($consulta1)) {
	$id = $row1['id'];
	$telefono = $row1['telefono'];

	if($desde==''){
		$desde = $id;
	}

	$telefono = str_replace(' ','',$telefono);
	$cantidad = strlen($telefono);

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

}

$hasta = $id;

$sql4 = "INSERT INTO rollback1 (fuente,desde,hasta,fecha_creacion) VALUES ('$tabla','$desde','$hasta','$fecha_creacion')";
$proceso4 = mysqli_query($conexion,$sql4);


$fecha_creacion1 = date('Y-m-d');
$writer = new Xlsx($spreadsheet);
$writer->save('../resources/descargas '.$fecha_creacion1.'.xlsx');
header("Location: ../resources/descargas ".$fecha_creacion1.".xlsx");


?>