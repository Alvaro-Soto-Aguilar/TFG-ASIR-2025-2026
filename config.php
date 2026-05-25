<?php
// Configuración Clínica Brossi - Proyecto ASIR
$host = "aws-0-eu-central-1.pooler.supabase.com"; 
$port = "5432";
$dbname = "postgres";
$user = "postgres.wmtqczikjrfadwxjaeub";
$password = "Proyectofinal2026@";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Conexión correcta: " . $e->getMessage());
}

session_start();
?>
