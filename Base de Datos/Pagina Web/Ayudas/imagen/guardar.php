<?php

require("conexion.php");

$nombre = $_POST['nombre'];
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$query = "insert into tabla_imagen(nombre,Imagen) values ('$nombre','$Imagen')";
$resultado=$conexion->query($query);

if($resultado){
	echo "Si se inserto";
}else{
	echo "No se inserto";
}

?>