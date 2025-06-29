<!DOCTYPE html>
<html lang="en">
<head>
    link rel="icon" type="image/x-icon" href="../img/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<?php
// Configuración de conexión a la base de datos
define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'cine');

try {
    $connection = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USER, PASSWORD);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Validar que se envió el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT); // Encriptar contraseña

        // Insertar datos en la tabla 'registro'
        $sql = "INSERT INTO registro (nombres, apellidos, email, telefono, direccion, contraseña)
                VALUES (:nombres, :apellidos, :email, :telefono, :direccion, :contraseña)";

        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':nombres' => $nombres,
            ':apellidos' => $apellidos,
            ':email' => $email,
            ':telefono' => $telefono,
            ':direccion' => $direccion,
            ':contraseña' => $contraseña
        ]);

        echo "<script>alert('Usuario registrado exitosamente'); window.location.href='login.php';</script>";
    }

} catch (PDOException $e) {
    echo "Error de conexión o inserción: " . $e->getMessage();
}
?>





</body>
</html>
