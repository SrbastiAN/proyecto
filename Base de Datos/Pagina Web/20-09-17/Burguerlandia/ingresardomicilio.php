<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Insertar a la BD</title>
</head>

<body>

<?php

$bd_host="localhost";
$bd_nombre="burguerlandia";
$bd_usuario="root";
$bd_contraseña="";

$id=$_POST["ID"];
$fecha=$_POST["Fecha"];
$hora=$_POST["Hora"];
$ced=$_POST["Ced"];


$conexion=mysqli_connect($bd_host,$bd_usuario,$bd_contraseña,$bd_nombre);
if(mysqli_connect_errno()){
echo "Fallo al conectar con la BD";
exit();	
}

/*mysqli_set_charset($conexion, "utf-8");*/

$consulta="insert into domicilio (IdDomicilio, Fecha_Dom, Hora_Dom, Cedula_Cl) values ('$id','$fecha','$hora','$ced')";

$resultados=mysqli_query($conexion, $consulta);

if($resultados==false){
	echo "Error al insertar";
}else{
	echo "Registro guardado";
}
mysqli_close($conexion);

?>

</body>
</html>