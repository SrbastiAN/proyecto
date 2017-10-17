<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Borrar en la BD</title>
</head>

<body>

<?php
require "conexion.php";

$ced=$_POST["ced"];

mysqli_set_charset($conexion, "utf8");

$consulta="delete from cliente where cedula_cl='$ced'";

$resultados=mysqli_query($conexion, $consulta);


if($resultados==false){
	echo "Error al borrar";
}else{
	echo "Registro borrado";
}
mysqli_close($conexion);

?>

</body>
</html>