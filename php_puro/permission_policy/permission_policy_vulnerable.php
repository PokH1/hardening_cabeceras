<?php
// CONFIGURACIÓN INSEGURA
header("Permissions-Policy: geolocation=(*), camera=(*), microphone=(*), fullscreen=(*), payment=(*)");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Permissions Policy Vulnerable - PHP Puro</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; padding-top: 60px; background: linear-gradient(135deg, #3a0f0f, #5c1a1a); color: white; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        nav { background: #333; position: fixed; top: 0; width: 100%; z-index: 1000; }
        nav ul { list-style: none; display: flex; margin: 0; padding: 15px; }
        nav li { margin-right: 20px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ccc; }
        .container { text-align: center; max-width: 800px; }
        .card { background: rgba(255,255,255,0.1); padding: 20px; margin: 15px 0; border-radius: 15px; backdrop-filter: blur(10px); }
        .danger { border: 2px solid red; }
        button { padding: 10px 20px; border: none; border-radius: 5px; background: #ff4444; color: white; cursor: pointer; }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../clickjacking/victima.php">Clickjacking</a></li>
            <li><a href="../csp/">CSP</a></li>
            <li><a href="../http_only/http_only_vulnerable.php">HttpOnly</a></li>
            <li><a href="permission_policy_vulnerable.php">Permissions Policy</a></li>
            <li><a href="../same_site/">SameSite</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Sitio Vulnerable</h1>
        <div class="card danger">
            <h2>Configuración Insegura</h2>
            <p>Geolocalización: Permitida para todos</p>
            <p>Cámara: Permitida para todos</p>
            <p>Micrófono: Permitido para todos</p>
            <p>Fullscreen: Permitido para todos</p>
            <p>Payment API: Permitido para todos</p>
        </div>
        <div class="card">
            <h2>Demostración</h2>
            <button onclick="getLocation()">Obtener Ubicación</button>
            <p id="location"></p>
        </div>
    </div>
    <script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                document.getElementById("location").innerHTML =
                    "Latitud: " + position.coords.latitude +
                    "<br>Longitud: " + position.coords.longitude;
            });
        } else {
            document.getElementById("location").innerHTML = "Geolocalización no soportada.";
        }
    }
    </script>
</body>
</html>
