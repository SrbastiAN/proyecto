<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Borrar en la BD</title>
</head>

<body>

<?php
require "conexion.php";

$id=$_POST["ID"];

mysqli_set_charset($conexion, "utf8");

$consulta="delete from publicidad where IdPublicidad='$id'";

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