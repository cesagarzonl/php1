<?php
require ("conexion.php");

$_nombres = $_POST['nombres'];
$_apellidos = $_POST['apellidos'];
$_ident = $_POST['ident'];
$_identificacion = $_POST['identificacion'];
$_telefono = $_POST['telefono'];
$_telefono1 = $_POST['telefono1'];
$_telefono2 = $_POST['telefono2'];
$_email = $_POST['email'];
$_salario = $_POST['salario'];


$insertar = mysqli_query($mysqli,"INSERT INTO EMPLEADOS (Nombres,Apellidos,Tipo_Identificacion,Numero_Identificacion,NumerosTelefonicos1,NumerosTelefonicos2,NumerosTelefonicos3,Correo_electronico,Salario_mensual,Historial_pagos_realizados) VALUES ('$_nombres','$_apellidos','$_ident','$_identificacion','$_telefono','$_telefono1','$_telefono2','$_email','$_salario','NO')");
if (!$insertar){echo "Error al guardar";}
else{





$resultado = $mysqli->query("SELECT * FROM EMPLEADOS WHERE Numero_Identificacion = '$_identificacion'");
$fila = $resultado->fetch_assoc();

;}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta http-equiv="Refresh" content="0;url=http://localhost/php/Hola.php">
</head>
<body>

</body>
</html>


