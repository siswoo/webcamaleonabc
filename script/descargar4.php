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

$sql1 = "SELECT id,correo FROM ".$tabla." WHERE autosend = 1 ORDER BY id ASC LIMIT ".$limit;
$consulta1 = mysqli_query($conexion,$sql1);
while($row1 = mysqli_fetch_array($consulta1)) {
	$id = $row1['id'];
	$correo = $row1['correo'];
	$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(40);
	$sheet->setCellValue('A'.$fila, $correo);
	$fila = $fila+1;
}

$fecha_creacion1 = date('Y-m-d');
$writer = new Xlsx($spreadsheet);
$writer->save('../resources/descargas4 '.$fecha_creacion1.'.xlsx');
header("Location: ../resources/descargas4 ".$fecha_creacion1.".xlsx");


?>