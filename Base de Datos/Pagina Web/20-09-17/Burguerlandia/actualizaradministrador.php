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
$nomb=$_POST['Nomb'];
$contra=$_POST['Contra'];


mysqli_set_charset($conexion, "utf8");

$consulta="update administrador set Nombre_Admin='$nomb', Contrasena_Admin='$contra' where IdAdministrador = '$id'";


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