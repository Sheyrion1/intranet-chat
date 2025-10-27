<?php
include("auth.php");
include("config/db.php");
$result = mysqli_query($con, "SELECT * FROM contactos");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Contactos</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Listado de contactos</h2>
<table border="1">
<tr>
<th>Nombre</th><th>Teléfono</th><th>Email</th><th>Dirección</th><th>Mapa</th>
</tr>
<?php while($row = mysqli_fetch_assoc($result)): ?>
<tr>
<td><?=$row['nombre']?></td>
<td><?=$row['telefono']?></td>
<td><?=$row['email']?></td>
<td><?=$row['direccion']?></td>
<td><a href="https://www.google.com/maps?q=<?=$row['latitud']?>,<?=$row['longitud']?>" target="_blank">Ver mapa</a></td>
</tr>
<?php endwhile; ?>
</table>
<a href="dashboard.php">Volver</a>
</body>
</html>
