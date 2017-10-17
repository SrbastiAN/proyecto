<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Ingresar Opinion</title>		
</head>

<body>

<?php
require "conexion.php";

$opn=$_POST['Opn'];
$correo=$_POST['Correo'];
$cel=$_POST['Cel'];

$consulta="insert into opinion (Opinion,Correo_Cl,Celular_Cli) VALUES ('$opn','$correo','$cel')";

$resultados=mysqli_query($conexion, $consulta);


if($resultados==false){
	echo "Error al registrar opinion";
}else{
	echo "Gracias por opinar";
}
mysqli_close($conexion);

?>

</body>
</html>