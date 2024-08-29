<?php
// db.php

// Configuración de la base de datos
$host = 'localhost';
$dbname = 'oficina_grados';
$username = 'root'; // Cambia esto por tu usuario de la base de datos
$password = '@dmision2023'; // Cambia esto por tu contraseña de la base de datos

try {
    // Crear una nueva conexión PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establecer el modo de error a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Manejo de errores de conexión
    echo "Error de conexión: " . $e->getMessage();
    exit;
}
?>
