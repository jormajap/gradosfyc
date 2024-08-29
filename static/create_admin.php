<?php
// Ejemplo en PHP para insertar un usuario administrador

// Conectar a la base de datos
$pdo = new PDO('mysql:host=localhost;dbname=oficina_grados', 'root', '@dmision2023');

// Preparar la consulta
$sql = "INSERT INTO usuarios (username, password_hash) VALUES (:username, :password_hash)";
$stmt = $pdo->prepare($sql);

// Datos del administrador
$username = 'admin';
$password = 'admin'; // Cambia esto por una contraseña segura
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Ejecutar la consulta
$stmt->execute([
    ':username' => $username,
    ':password_hash' => $password_hash
]);

echo "Usuario administrador creado.";
?>
