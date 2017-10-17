<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mostrar Imagenes</title>
</head>
<body>
<center>
<table border="2">
<thead>
<tr>
<th>Nombre</th>
<th>Imagen</th>
<th>Operaciones</th>
</tr>
</thead>
<tbody>
<?php
include("conexion.php");

$query= "SELECT * FROM tabla_imagen";
$resultado= $conexion->query($query);
while($row=$resultado->fetch_assoc()){
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['nombre'];?></td>
<td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"/></td>
</tr>

<?php
}
?>

</tbody>
</table>
</center>
</body>
</html>