<?php
include 'config.php';
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = "https://ezhdprzakqisisipzchsqc.supabase.co/auth/v1/token?grant_type=password";
    $datos = ["email" => $_POST['email'], "password" => $_POST['password']];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["apikey: $supabase_key", "Content-Type: application/json"]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($datos));
    $res = json_decode(curl_exec($ch), true);
    
    if (isset($res['access_token'])) {
        $_SESSION['token'] = $res['access_token'];
        $_SESSION['user_id'] = $res['user']['id'];
        header("Location: dashboard.php");
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - Clínica Brossi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="max-width: 400px;">
        <h2>Acceso Clientes</h2>
        <?php if($error) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>