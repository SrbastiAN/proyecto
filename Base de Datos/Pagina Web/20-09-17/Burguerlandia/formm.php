<?php
$conexion = mysqli_connect("localhost","root","","burguerlandia");
$query= "select cedula,nombre from cliente order by nombre asc";
$resultado=$conexion->query($query);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<legend>Seleccione una cedula</legend>
<select name="cedula" size="0">	
<?php
while($row = mysqli_fetch_array($resultado)){ ?>
<option value="<?php echo $row['cedula']?>"><?php echo $row['cedula']?> </option>
<?php } ?>
</select>

</body>
</html>
