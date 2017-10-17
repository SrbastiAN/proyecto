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
<h1>Opiniones </h1>
<h4>ID... Correo... Celular... Opinion</h4>

<?php
require "conexion.php";

$consulta="select * from opinion";

$resultados=mysqli_query($conexion, $consulta);

while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){

echo "<table width='50%' 
	align='center' 
	border='1px'
	margin='auto'><tr><td>";

echo $fila['idOpinion'] . "</td><td>";
echo $fila['Correo_Cl'] . "</td><td>";
echo $fila['Celular_Cli'] . "</td><td>";
echo $fila['Opinion'] . "</td><td></table>";
echo "<br>";


}

if($resultados==false){
	echo "Error al consultar";
}
mysqli_close($conexion);

?>

</body>
</html>