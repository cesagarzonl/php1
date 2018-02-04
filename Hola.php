<?php
require ("conexion.php");
$consulta = consultas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Vortex</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body ng-app="">

<div id="encabezado" name="encabezado">
	<h1>Vortex </h1>
</div>
<div id="principal" name="encabezado" >
<div id="form" name="form" >
	<form action="hola2.php" method="POST">
	 <p>Nombres: <input  placehoder="Nombres" type="text" name="nombres" ng-model="nombres" required /></p>
	 <p>Apellidos: <input placehoder="Apellidos" type="text" name="apellidos"  ng-model="apellidos" required /></p>
	 <p>telefono: <input placehoder="telefono" type="number" name="telefono"  ng-model="telefono" required/></p>
	 <p>telefono: <input placehoder="telefono" type="number" name="telefono1" ng-model="telefono1" required /></p>
	 <p>telefono: <input placehoder="telefono" type="number" name="telefono2" ng-model="telefono2" required /></p>
	 <p>Correo electrónico: <input placehoder="Correo" type="email" name="email" ng-model="email"  required /></p>
	 <p>Salario mensual: <input  placehoder="salario mensual" type="number" name="salario" ng-model="salario" required /></p>
	 <p>Numero de Identificación: <input placehoder="Numero de Identificación" name="identificacion"  ng-model="identificacion" type="number" required /></p>
	 <p>Tipo de Identificación: 
	 <select type="text" name="ident" />
	  <option value="rut">Rut</option>
	  <option value="nit">Nit</option>
	  <option value="cc">CC</option>
	  <option value="ce">CE</option></p>
	 <p><input type="submit" value="Enviar" id="enviofor" name="enviofor"/></p>
</form>
</div>

<div id="form" name="form" >
<form  action="elimina.php" method="POST" id="form" name="form" >
	 <p> para eliminar por favor digije el Numero de Documento: <input placehoder="Numero de Identificación" name="identificacion2"  ng-model="identificacion2" typw="number" /></p>
	 <p><input type="submit" value="elimina"/></p>
</form>
</div>



</div>
<table>
	<tr>
		<th width="80">NOMBRE</th>
		<th width="150">APELLIDO</th>
		<th width="150">TIPO DE DOCUEMTO</th>
		<th width="160" >NUMERO DE DOCUMENTO</th>
		<th width="150" >Numeros Telefonicos</th>
		<th width="250" >correo electronico</th>
		<th width="150" >Salario</th>
	</tr>
	<?php
while($hh = $consulta->fetch_assoc())
{
	?>
<tr>
	<td><?php echo $hh['Nombres'];?></td>
	<td><?php echo $hh['Apellidos'];?></td>
	<td><?php echo $hh['Tipo_Identificacion'];?></td>
	<td><?php echo $hh['Numero_Identificacion'];?></td>
	<td><?php echo $hh['NumerosTelefonicos1'];?></td>
	<td><?php echo $hh['Correo_electronico'];?></td>
	<td><?php echo $hh['Salario_mensual'];?></td>
</tr>
<?php
}
?>
<tr>
	 <td>{{nombres}}</td>
	 <td>{{apellidos}}</td>
	 <td>{{ident}} </td>
	 <td>{{identificacion}}</td>
	 <td>{{telefono}}</td>
	 <td>{{email}}</td>
	 <td>{{salario}}</td>
</tr>
</table>
</body>
</html>