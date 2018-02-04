<?php
require ("conexion.php");
$_identificacion2 = $_POST['identificacion2'];
if (empty($_identificacion2)) 
{
	echo 'La variable SÍ está vacía, su contenido es: '. $var;
}
else{
$resultado2 = $mysqli->query("DELETE FROM EMPLEADOS WHERE Numero_Identificacion = '$_identificacion2' ");
header("Status: 301 Moved Permanently");
header("Location: http://localhost/php/Hola.php");
echo "se elimino algo";
exit;
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta http-equiv="Refresh" content="5;url=http://localhost/php/Hola.php">
</head>
<body>

</body>
</html>
