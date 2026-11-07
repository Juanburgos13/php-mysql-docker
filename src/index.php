
<?php

$host = 'db';
$dbname = 'hola_mundo';
$username = 'root';
$password = '123456';

try {
    $conexion = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $conexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "<h1>¡Hola Mundo!</h1>";
    echo "<p>Aplicación PHP ejecutándose correctamente.</p>";
    echo "<p>Conexión con MySQL exitosa.</p>";

} catch (PDOException $e) {
    http_response_code(500);
    echo "<h1>Error de conexión</h1>";
    echo "<p>No se pudo conectar con MySQL.</p>";
}
?>
