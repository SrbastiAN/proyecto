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
<h1>Publicidad</h1>
<h4>ID... Descripcion... Foto... Fecha</h4>
<?php
require "conexion.php";

$consulta="select * from publicidad ";

$resultados=mysqli_query($conexion, $consulta);

while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){

echo "<table width='50%' 
	align='center' 
	border='1px'
	margin='auto'><tr><td>";
	
echo $fila['IdPublicidad'] . "</td><td>";
echo $fila['Descripcion_Pub'] . "</td><td>";
echo $fila['Foto_Pub'] . "</td><td> ";
echo $fila['Fecha_Pub'] . "</td><td></tr></table>";
echo "<br>";


}

if($resultados==false){
	echo "Error al consultar";
}else{
	echo "Registro consultado";
}
mysqli_close($conexion);

?>

</body>
</html>