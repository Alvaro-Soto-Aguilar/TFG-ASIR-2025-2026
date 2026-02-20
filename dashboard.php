<?php
session_start();
if (!isset($_SESSION['token'])) header("Location: login.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Clínica Brossi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="dashboard.php">Mi Panel</a>
        <a href="logout.php">Cerrar Sesión</a>
    </nav>
    <div class="container">
        <h1>Bienvenido a su Área Privada</h1>
        <p>ID de Usuario: <strong><?php echo $_SESSION['user_id']; ?></strong></p>
        <div style="background: #e3f2fd; padding: 20px; border-radius: 8px;">
            <h3>Gestión de Citas</h3>
            <p>Desde aquí podrá ver sus próximos diagnósticos y pedir nuevas citas.</p>
            <button onclick="alert('Funcionalidad en desarrollo')">Nueva Cita</button>
        </div>
    </div>
</body>
</html>