<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Actualizar en la BD</title>
</head>

<body>

<?php
require "conexion.php";

$ced=$_POST['Cedula'];
$tel=$_POST['Tel'];
$cel=$_POST['Cel'];
$nomb=$_POST['Nomb'];
$direc=$_POST['Direc'];
$contra=$_POST['Contra'];

mysqli_set_charset($conexion, "utf8");

$consulta="update cliente set Telefono_Cl='$tel', Celular_Cl='$cel', Nombre_Cl='$nomb', Direccion_Cl='$direc', Contrasena_Cl='$contra' where cedula_cl = '$ced'";


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