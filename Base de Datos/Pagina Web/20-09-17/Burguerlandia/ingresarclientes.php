<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Ingresar Cliente</title>
</head>

<body>

<?php
require "conexion.php";

$cel=$_POST['Cel'];
$tel=$_POST['Tel'];
$ced=$_POST['Ced'];
$nomb=$_POST['Nomb'];
$direc=$_POST['Direc'];
$contra=$_POST['Contra'];

$consulta="insert into cliente (Cedula_Cl,Telefono_Cl,Celular_Cl,Nombre_Cl,Direccion_Cl,Contrasena_Cl) VALUES ('$ced', '$tel', '$cel', '$nomb', '$direc','$contra')";

$resultados=mysqli_query($conexion, $consulta);


if($resultados==false){
	echo "Error al registrarse";
}else{
	echo "Gracias por registrarse";
}
mysqli_close($conexion);

?>

</body>
</html>