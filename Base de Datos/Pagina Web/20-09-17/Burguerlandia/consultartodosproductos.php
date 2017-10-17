<!doctype html>
<html>
<head>
<meta chaset="utf-8">
<title>Consultar en la BD</title>
</head>
<body background="img/fondo1.jpg">
<center>
<table border="2">
<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Valor</th>
<th>Descripcion</th>
<th>Foto</th>
</tr>
</thead>
<tbody>
<?php
include("conexion.php");

$query= "select * from producto";
$resultado= $conexion->query($query);
while($row=$resultado->fetch_assoc()){
?>
<tr>
<td><?php echo $row['IdProducto'];?></td>
<td><?php echo $row['Nombre_Pr'];?></td>
<td><?php echo $row['Valor_Pr'];?></td>
<td><?php echo $row['Descripcion_Pr'];?></td>
<td><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['Foto_Pr']); ?>"/></td>
</tr>

<?php
}
?>

</tbody>
</table>
</center>
<?php mysqli_close($conexion); ?>

</body>
</html>