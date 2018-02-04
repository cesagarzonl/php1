<?php
$mysqli = new mysqli("127.0.0.1", "root", "123456789", "nuevooos", 3306);
if ($mysqli->connect_errno) {echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$consulta = '';


function consultas()
{
	global $mysqli,$consulta;
	$sql = 'SELECT * FROM EMPLEADOS';
	return $mysqli->query($sql);
}

?>