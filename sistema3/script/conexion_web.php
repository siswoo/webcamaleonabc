<?php
$servidor = "localhost";
$usuario = "camaleon_juanmaldonado";
$contrasena = "juanmaldonado123";
$basededatos = "camaleon_prueba1";
//passwordcpanel123
$conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("Problemas con la Base de datos, contactar al desarollador");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Error con la base de datos registrar la configuración" );