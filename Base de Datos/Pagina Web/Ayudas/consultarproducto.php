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
<h1>Producto</h1>
<h4>ID... Nombre... Valor... Descripcion... Foto</h4>

<?php

require "conexion.php";

$id=$_POST["ID"];

$consulta="select * from producto where IdProducto = '$id'";

$resultados=mysqli_query($conexion, $consulta);

while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){

echo "<table width='100%' 
	align='center' 
	border='1px'
	margin='auto'><tr><td>";
	
echo $fila['IdProducto'] . "</td><td>";
echo $fila['Nombre_Pr'] . "</td><td>";
echo $fila['Valor_Pr'] . "</td><td> ";
echo $fila['Descripcion_Pr'] . "</td><td>";?>
<img src="consultarproducto.php?Foto_Pr=<?php echo $fila['Foto_Pr']; ?>" <?php echo "</td><td></tr></table>";
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