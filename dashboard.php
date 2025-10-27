<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Dashboard - Intranet Chat</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
  <h2>Panel de Administración</h2>
  <nav>
    <a href="contactos.php">Contactos</a> |
    <a href="users.php">Usuarios</a> |
    <a href="import.php">Importar CSV</a> |
    <a href="logout.php">Cerrar sesión</a>
  </nav>
</header>

<main>
  <h3>Bienvenido, <?=$_SESSION['username']?></h3>
  <p>Seleccioná una opción del menú.</p>
</main>

<footer>
  &copy; <?php echo date("Y"); ?> Café América Mayorista - FlowIT-AR.
</footer>

</body>
</html>
