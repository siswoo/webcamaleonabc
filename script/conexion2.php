<?php
$servidor2 = "localhost";
$usuario2 = "root";
$contrasena2 = "";
$basededatos2 = "sistemav2";
$conexion2 = mysqli_connect($servidor2,$usuario2,$contrasena2) or die ("Problemas con la Base de datos, contactar al desarollador");
$db2 = mysqli_select_db($conexion2,$basededatos2) or die ("Error con la base de datos registrar la configuración");

if (!mysqli_set_charset($conexion2, "utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conexion2));
    exit();
} else {}