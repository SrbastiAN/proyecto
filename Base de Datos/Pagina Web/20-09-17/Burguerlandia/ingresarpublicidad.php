<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Ingresar Publicidad</title>
</head>

<body>

<?php
require "conexion.php";

$desc=$_POST['Desc'];
$foto=$_POST['Foto'];
$fecha=$_POST['Fecha'];


$consulta="insert into publicidad (Descripcion_Pub, Foto_Pub, Fecha_Pub) VALUES ('$desc', '$foto', '$fecha')";

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