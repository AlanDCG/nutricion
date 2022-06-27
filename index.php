<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
    <title>Nutrición</title>
</head>

<body>
<div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#">Nutrición</a></li>
	</ul>
</div> 
<?php include('conexion.php');?>

<table>

<tr><th colspan="7"><h1>Listado de Alimentos</h1></th></tr>
<tr>

<th>Imagen</th>
<th>Nombre</th>
<th>Valor Energético</th>
<th>Carbohidratos</th>
<th>Proteinas</th>
<th>Grasas</th>


</tr>

<?php

$sql="select * from alimentos";
$resultado=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($resultado))

{
?>

<tr>
	<td><?php echo "<img width='80' height='80' src='img/".$mostrar['imagen'].".png'>" ?></td>
	<td><?php echo $mostrar['nombre'] ?></td>
	<td><?php echo $mostrar['valorenergetico'] ?></td>
	<td><?php echo $mostrar['carbs'] ?></td>
	<td><?php echo $mostrar['prote'] ?></td>
    <td><?php echo $mostrar['grasas'] ?></td>
</tr>

<?php
}
?>

</table>
</body>
</html>