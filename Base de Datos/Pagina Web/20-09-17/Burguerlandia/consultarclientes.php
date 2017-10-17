<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Consultar en la BD</title>
<style>
body{
	background-image:url("img/fondo1.jpg");
	background-size:100% 100%;
	background-attachment:fixed;
}
h1, h4{
	text-align: center;
}

</style>
</head>

<body>
<h1> Lista de Clientes </h1>
<h4> Telefono... Celular... Nombre... Direccion... Contraseña </h4>

<?php
require "conexion.php";

$ced=$_POST["Cedula"];

$consulta="select * from cliente where Cedula_Cl='$ced';";

$resultados=mysqli_query($conexion, $consulta);

while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){

echo "<table width='50%' 
	align='center' 
	border='1px'
	margin='auto'><tr><td>";

echo $fila['Telefono_Cl'] . "</td><td>";
echo $fila['Celular_Cl'] . "</td><td> ";
echo $fila['Nombre_Cl'] . "</td><td> ";
echo $fila['Direccion_Cl'] . "</td><td> ";
echo $fila['Contrasena_Cl'] . "</table>";
echo "<br>";


}

if($resultados==false){
	echo "Error al consultar";
}
mysqli_close($conexion);

?>

</body>
</html>