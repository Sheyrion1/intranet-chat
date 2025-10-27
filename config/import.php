<?php
include("auth.php");
include("config/db.php");

if(isset($_POST['import'])){
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, "r");
    $c = 0;
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false){
        $nombre = $filesop[0];
        $telefono = $filesop[1];
        $email = $filesop[2];
        $direccion = $filesop[3];
        $lat = $filesop[4];
        $lng = $filesop[5];
        if($c != 0){
            $sql = "INSERT INTO contactos (nombre, telefono, email, direccion, latitud, longitud) VALUES ('$nombre','$telefono','$email','$direccion','$lat','$lng')";
            mysqli_query($con, $sql);
        }
        $c++;
    }
    echo "Importación completada.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Importar CSV</title></head>
<body>
<h2>Importar contactos desde CSV</h2>
<form method="post" enctype="multipart/form-data">
<input type="file" name="file" required>
<input type="submit" name="import" value="Importar">
</form>
<a href="dashboard.php">Volver</a>
</body>
</html>
