<!doctype php>
<html>
<head>
<meta chaset="utf-8">
<title>Conexion.php</title>
</head>
<body>
<?php

$bd_host="localhost";
$bd_nombre="burguerlandia";
$bd_usuario="root";
$bd_contraseña="";

$conexion=mysqli_connect($bd_host,$bd_usuario,$bd_contraseña,$bd_nombre);
if(mysqli_connect_errno()){
echo "Fallo al conectar con la BD";

exit();
}

?>

</body>
</html>