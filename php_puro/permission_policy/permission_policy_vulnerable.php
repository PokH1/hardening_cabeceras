<?php
// ❌ CONFIGURACIÓN INSEGURA
header("Permissions-Policy: geolocation=(*), camera=(*), microphone=(*), fullscreen=(*), payment=(*)");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Permission Policy Vulnerable</title>
    <link rel="stylesheet" href="style.css">
</head>
    <style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #3a0f0f, #5c1a1a);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: white;
    }

    .container {
        text-align: center;
    }

    .card {
        background: rgba(255,255,255,0.1);
        padding: 20px;
        margin: 15px 0;
        border-radius: 15px;
        backdrop-filter: blur(10px);
    }

    .danger {
        border: 2px solid red;
    }
    </style>
<body>

<div class="container">
    <h1>🚨 Sitio Vulnerable</h1>

    <div class="card danger">
        <h2>Configuración Insegura Detectada</h2>
        <p>⚠ Geolocalización: Permitida para todos</p>
        <p>⚠ Cámara: Permitida para todos</p>
        <p>⚠ Micrófono: Permitido para todos</p>
        <p>⚠ Fullscreen: Permitido para todos</p>
        <p>⚠ Payment API: Permitido para todos</p>
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