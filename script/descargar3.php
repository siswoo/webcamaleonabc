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
$tabla = $_GET["tabla"];

$desde = '';
$hasta = '';

$sql1 = "SELECT id,nombre,telefono FROM ".$tabla." WHERE autosend = 1 ORDER BY id ASC LIMIT ".$limit;
$consulta1 = mysqli_query($conexion,$sql1);
while($row1 = mysqli_fetch_array($consulta1)) {
	$id = $row1['id'];
	$nombre = $row1['nombre'];
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
		$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(20);
		$sheet->setCellValue('A'.$fila, $nombre);
		$spreadsheet->getActiveSheet()->getCell('B'.$fila)->setValue("57".$telefono);
		$spreadsheet->getActiveSheet()->getStyle('B'.$fila)->getNumberFormat()->setFormatCode('00');

		$fila = $fila+1;
	}
	
	$sql3 = "UPDATE ".$tabla." SET autosend = 2 WHERE id = ".$id;
	$proceso3 = mysqli_query($conexion,$sql3);

}

$hasta = $id;

$sql4 = "INSERT INTO rollback1 (fuente,desde,hasta,fecha_creacion) VALUES ('$tabla','$desde','$hasta','$fecha_creacion')";
$proceso4 = mysqli_query($conexion,$sql4);

$fecha_creacion1 = date('Y-m-d');
$writer = new Xlsx($spreadsheet);
$writer->save('../resources/descargas3 '.$fecha_creacion1.'.xlsx');
header("Location: ../resources/descargas3 ".$fecha_creacion1.".xlsx");
?>