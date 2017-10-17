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
$Valor=$_POST['Valor'];
$Desc=$_POST['Desc'];
$Foto=addslashes(file_get_contents($_FILES['Foto']['tmp_name']));

$consulta="insert into producto (Nombre_Pr, Valor_Pr, Descripcion_Pr, Foto_Pr) VALUES ('$Nomb', '$Valor', '$Desc', '$Foto')";

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