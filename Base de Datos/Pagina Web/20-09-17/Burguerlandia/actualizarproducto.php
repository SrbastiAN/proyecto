<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Actualizar en la BD</title>
</head>

<body>

<?php
require "conexion.php";

$Nomb=$_POST['Nomb'];
$Valor=$_POST['Valor'];
$Desc=$_POST['Desc'];
$Foto=$_POST['Foto'];
$id=$_POST['ID'];

$consulta="update producto set Nombre_Pr='$Nomb', Valor_Pr='$Valor', Descripcion_Pr='$Desc', Foto_Pr='$Foto' where IdProducto = '$id'";


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