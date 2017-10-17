<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Ingresar Producto</title>
</head>

<body>

<?php
require "conexion.php";

$Nomb=$_POST['Nomb'];
$contra=$_POST['Contra'];

$consulta="insert into administrador (Nombre_Admin, Contrasena_Admin) VALUES ('$Nomb', '$contra')";

$resultados=mysqli_query($conexion, $consulta);


if($resultados==false){
	echo "Error al ingresar";
}else{
	echo "Gracias por ingresar";
}
mysqli_close($conexion);

?>

</body>
</html>
