<?php
require 'config.php';


if (!isset($_SESSION['user_id'])) {
    header("Location: logjn.php");
    exit();
}


$nombreUsuario = $_SESSION['nombre'] ?? 'Usuario';
$rolUsuario = $_SESSION['rol'] ?? 'paciente';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <link rel="stylesheet" href="style.css">
    <style>

        .dashboard-wrapper { display: flex; min-height: 100vh; }
        
        .sidebar { 
            width: 250px; background: var(--azul-brossi); color: white; padding: 20px; 
        }
        
        .main-content { flex: 1; padding: 40px; }
        
        .stats-grid { 
            display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); 
            gap: 20px; margin-top: 20px; 
        }
        
        .stat-card { 
            background: white; padding: 20px; border-radius: 12px; 
            box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: center;
        }

        .role-badge {
            background: var(--verde-exito); color: white; padding: 5px 12px;
            border-radius: 20px; font-size: 0.8em; text-transform: uppercase;
        }
        
        .logout-btn { 
            display: block; margin-top: 50px; color: #ffbcbc; text-decoration: none; font-weight: bold;
        }
    </style>
</head>
<body>

<div class="dashboard-wrapper">
    <aside class="sidebar">
        <img src="logoclinica.png" alt="Logo" style="width: 100%; filter: brightness(0) invert(1); margin-bottom: 30px;">
        <h3>Menú</h3>
        <nav>
            <p>🏠 Inicio</p>
            <p>📅 Mis citas</p>
            <p>📁 Historial clínico</p>
            <?php if($rolUsuario == 'admin'): ?>
                <p>⚙️ Configuración sistema</p>
                <p>👥 Gestión de personal</p>
            <?php endif; ?>
        </nav>
        <a href="logout.php" class="logout-btn">Cerrar sesión</a>
    </aside>

    <main class="main-content">
        <header style="background:none; box-shadow:none; padding:0;">
            <h1>Hola, <?php echo htmlspecialchars($nombreUsuario); ?></h1>
            <span class="role-badge"><?php echo $rolUsuario; ?></span>
        </header>

        <section class="stats-grid">
            <div class="stat-card">
                <h3>Próxima Cita</h3>
                <p>Mañana - 10:30 AM</p>
            </div>
            <div class="stat-card">
                <h3>Mensajes</h3>
                <p>2 nuevos</p>
            </div>
            <div class="stat-card">
                <h3>Analíticas</h3>
                <p>Disponibles</p>
            </div>
        </section>

        <div style="margin-top: 40px; background: white; padding: 30px; border-radius: 15px;">
            <h2>Actividad Reciente</h2>
            <hr style="border: 0; border-top: 1px solid #eee;">
            <p>✅ Acceso al sistema realizado con éxito desde la IP del centro.</p>
            <p>✅ Base de datos Supabase conectada correctamente.</p>
        </div>
    </main>
</div>

</body>
</html>