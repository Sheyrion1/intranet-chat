<?php
include("auth.php");
include("config/db.php");

// Mostrar todos los usuarios
$result = mysqli_query($con, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Usuarios</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Usuarios registrados</h2>
<table border="1">
<tr><th>ID</th><th>Usuario</th><th>Rol</th><th>Acciones</th></tr>
<?php while($row = mysqli_fetch_assoc($result)): ?>
<tr>
<td><?=$row['id']?></td>
<td><?=$row['username']?></td>
<td><?=$row['role']?></td>
<td><a href="delete_user.php?id=<?=$row['id']?>">Eliminar</a></td>
</tr>
<?php endwhile; ?>
</table>

<a href="dashboard.php">Volver</a>
</body>
</html>
