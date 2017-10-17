<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Actualizar en la BD</title>
</head>

<body>

<?php
require "conexion.php";

$id=$_POST['ID'];
$opn=$_POST['opn'];


mysqli_set_charset($conexion, "utf8");

$consulta="update opinion set Opinion='$opn' where idOpinion = '$id'";


$resultados=mysqli_query($conexion, $consulta);


if($resultados==false){
	echo "Error al actualizar";
}else{
	echo "Registro actualizado";
}
mysqli_close($conexion);

?>

</body>
</html>