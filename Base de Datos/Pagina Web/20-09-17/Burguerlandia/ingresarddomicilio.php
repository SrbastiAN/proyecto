<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Ingresar Domicilio</title>
</head>

<body>

<?php
$bd_host="localhost";
$bd_nombre="burguerlandia";
$bd_usuario="root";
$bd_contraseña="";

$id1=$_POST["ID1"];
$cant=$_POST["Cant"];
$idp=$_POST["IDP"];


$conexion=mysqli_connect($bd_host,$bd_usuario,$bd_contraseña,$bd_nombre);
if(mysqli_connect_errno()){
echo "Fallo al conectar con la BD";
exit();
}

mysqli_set_charset($conexion, "utf8");

$consulta="insert into detalle_domicilio (Cantidad, IdDomicilio, IdProducto) values ('$cant','$id1','$idp')";

$resultados=mysqli_query($conexion, $consulta);

if($resultados==false){
	echo "Error al insertar2";
}else{
	echo "Registro guardado2";
}
mysqli_close($conexion);







/*function execute($conexion, $fecha, $hora, $cedula, $productos, $cantidad, $id) 
{ 
$q1= "INSERT INTO domicilio (id_domicilio, Fecha_Dom, Hora_Dom, Cliente_Cedula) values ('$id', '$fecha','$hora','$cedula')"; 
$resultquery = mysqli_query($q1); 
$errores = mysqli_errno(); 

$q2= "insert into detalle_domicilio (Cantidad, id_domicilio, Productos_Id_Productos) values ('$cantidad','$id','$productos')"; 
$resultquery = mysqli_query($q2); 
$errores = $errores + mysqli_errno(); 
return $errores; 
} 

$result = execute ($conexion, $fecha, $hora, $cedula, $productos, $cantidad, $id); 

if($resul==false){
	echo "Error al ingresar";
}else{
	echo "Gracias por ingresar ";
}

/*if ($result == 0) { 
echo "Todo Ok"; 
}  
else 
{ 
echo "Error al insertar datos" 
}*/

?>

</body>
</html>