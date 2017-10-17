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
<h1> Lista de Administradores</h1>
<h4> ID... Nombre... Contraseña</h4>

<body>

<?php
require "conexion.php";

$consulta="select * from administrador";

$resultados=mysqli_query($conexion, $consulta);

while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){

echo "<table width='50%' 
	align='center' 
	border='1px'
	margin='auto'><tr><td>";

echo $fila['IdAdministrador'] . "</td><td>";
echo $fila['Nombre_Admin'] . "</td><td> ";
echo $fila['Contrasena_Admin'] . "</td><td></tr></table>";
echo "<br>";


}

if($resultados==false){
	echo "Error al consultar";
}
mysqli_close($conexion);

?>

</body>
</html>
