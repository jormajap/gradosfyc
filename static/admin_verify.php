<?php
// Conectar a la base de datos
$pdo = new PDO('mysql:host=localhost;dbname=oficina_grados', 'root', '@dmision2023');

// Obtener datos del formulario de login
$username = $_POST['username'];
$password = $_POST['password'];

// Buscar el usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->execute([':username' => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password_hash'])) {
    // Login exitoso
    echo "Autenticación exitosa.";
    // Aquí puedes iniciar una sesión y redirigir al usuario
} else {
    // Login fallido
    echo "Usuario o contraseña incorrectos.";
}
?>
