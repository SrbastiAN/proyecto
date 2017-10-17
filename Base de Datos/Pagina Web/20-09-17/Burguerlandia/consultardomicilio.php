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
<h1> Domicilio</h1>
<h4> ID... Fecha... Hora... Cedula Cliente... Nombre... Producto... Cantidad... Valor Unidad</h4>  

<?php
require "conexion.php";

$ced=$_POST["Cedula"];

$consulta="select t1.IdDomicilio, t1.Fecha_Dom, t1.Hora_Dom, t1.Cedula_Cl, t4.nombre_cl, t3.nombre_pr, t2.Cantidad, t3.valor_pr  from domicilio as t1 inner join detalle_domicilio as t2 on (t1.IdDomicilio=t2.IdDomicilio) inner join producto as t3 on (t3.IdProducto=t2.IdProducto) inner join cliente as t4 on (t1.cedula_cl = t4.cedula_cl) where t1.Cedula_Cl='$ced';";

$resultados=mysqli_query($conexion, $consulta);

while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){
 
echo "<table width='75%' 
	align='center' 
	border='1px'
	margin='auto'><tr><td>";

echo $fila['IdDomicilio'] . "</td><td>";
echo $fila['Fecha_Dom'] . "</td><td> ";
echo $fila['Hora_Dom'] . "</td><td> ";
echo $fila['Cedula_Cl'] . "</td><td> ";
echo $fila['nombre_cl'] . "</td><td> ";
echo $fila['nombre_pr'] . "</td><td> ";
echo $fila['Cantidad'] . "</td><td> ";
echo $fila['valor_pr'] . "</td><td></tr></table>";
echo "<br>";


}

if($resultados==false){
	echo "Error al consultar";
}
mysqli_close($conexion);

?>

</body>
</html>