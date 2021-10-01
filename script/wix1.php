<?php
include("conexion.php");
include("conexion2.php");
require '../resources/Spreadsheet/autoload.php';
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
$fecha_creacion = date('Y-m-d');

	$texto = $_POST["texto"];
	$maximo = 800;

	$sql1 = "SELECT * FROM wix WHERE hablame = 0 LIMIT ".$maximo;
	$proceso1 = mysqli_query($conexion,$sql1);
	$contador1 = mysqli_num_rows($proceso1);

	if($contador1<=799){
		$restante = $maximo-$contador1;
		
		$sql2 = "SELECT * FROM wix WHERE hablame = 1 LIMIT ".$restante;
		$proceso2 = mysqli_query($conexion,$sql2);

		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$fila = 1;

		$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
		$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(80);

		while($row1 = mysqli_fetch_array($proceso1)) {
			$id = $row1["id"];
			$telefono = $row1["telefono"];

			$sql3 = "UPDATE wix SET hablame = 1 WHERE id = ".$id;
			$proceso3 = mysqli_query($conexion,$sql3);

			$sheet->setCellValue('A'.$fila, $telefono);
			$sheet->setCellValue('B'.$fila, $texto);
			$fila = $fila+1;
		}

		while($row2 = mysqli_fetch_array($proceso2)) {
			$id = $row1["id"];
			$telefono = $row2["telefono"];

			$sql4 = "UPDATE wix SET hablame = 1 WHERE id = ".$id;
			$proceso4 = mysqli_query($conexion,$sql4);

			$sheet->setCellValue('A'.$fila, $telefono);
			$sheet->setCellValue('B'.$fila, $texto);
			$fila = $fila+1;
		}

	}else{
		$sql1 = "SELECT * FROM wix WHERE hablame = 0 LIMIT ".$maximo;
		$proceso1 = mysqli_query($conexion,$sql1);
		$contador1 = mysqli_num_rows($proceso1);

		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$fila = 1;

		$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
		$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(80);

		while($row1 = mysqli_fetch_array($proceso1)) {
			$id = $row1["id"];
			$telefono = $row1["telefono"];

			$sql4 = "UPDATE wix SET hablame = 1 WHERE id = ".$id;
			$proceso4 = mysqli_query($conexion,$sql4);

			$sheet->setCellValue('A'.$fila, $telefono);
			$sheet->setCellValue('B'.$fila, $texto);
			$fila = $fila+1;
		}
	}

	$fecha_inicio1 = date('Y-m-d');
	$writer = new Xlsx($spreadsheet);
	$writer->save('../resources/wix '.$fecha_inicio1.'.xlsx');
	header("Location: ../resources/wix ".$fecha_inicio1.".xlsx");

?>