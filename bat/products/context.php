<?php
$servername = "localhost"; // Nombre del servidor de MySQL
$username = "root"; // Nombre de usuario de MySQL
$password = ""; // Contraseña de MySQL
$database = "medifarmv14"; // Nombre de la base de datos

try {
    // Crear una conexión utilizando PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Si la conexión se establece correctamente
    //echo "Conexión exitosa a MySQL";
} catch(PDOException $e) {
    // En caso de error
    //echo "Error de conexión: " . $e->getMessage();
}

// Cerrar la conexión
//$conn = null;
?>