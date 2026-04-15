<?php
// 🛡️ Cookie SEGURA
setcookie("session_id", "SESSION123456", [
    "expires" => time() + 3600,
    "path" => "/",
    "secure" => true,      
    "httponly" => true,     
    "samesite" => "Strict" 
]);

// 🔐 Sanitización segura
$nombreSeguro = "";

if (isset($_GET['nombre'])) {
    // 1️⃣ Quitar espacios raros
    $nombre = trim($_GET['nombre']);

    // 2️⃣ Convertir caracteres especiales (PROTECCIÓN XSS)
    $nombreSeguro = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Simulación XSS Protegida</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            width: 420px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 6px;
            background-color: #2ecc71;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background-color: #27ae60;
        }

        .result {
            margin-top: 15px;
            padding: 10px;
            background: #e8f8f5;
            border-radius: 6px;
            border-left: 4px solid #2ecc71;
        }

        .attack-zone {
            margin-top: 20px;
            padding: 12px;
            background: #edf2f7;
            border-left: 4px solid #3498db;
            border-radius: 6px;
            font-size: 14px;
        }

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #eee;
        }

        small {
            color: #888;
        }
    </style>

    <nav>
    <div class="logo">🛡 Hardening Project</div>
    <div>
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('mime.solucion') }}">MIME Sniffing</a>
        <a href="{{ route('cookie.solucion') }}">Secure Cookie</a>
        <a href="{{ route('csp') }}">CSP</a>
        <a href="{{ route('same-site.solucion') }}">SameSite</a>
        <a href="{{ route('http-only') }}">HttpOnly</a>
    </div>
</nav>
</head>
<body>

<div class="container">

    <h2>Simulación XSS Protegida 🛡️</h2>

    <form method="GET">
        <label>Escribe tu nombre:</label>
        <input type="text" name="nombre" placeholder="Tu nombre aquí">
        <button type="submit">Enviar</button>
        <small>Prueba escribiendo: &lt;script&gt;alert("XSS")&lt;/script&gt;</small>
    </form>

    <hr>

    <?php if (!empty($nombreSeguro)): ?>
        <div class="result">
            Bienvenido <?= $nombreSeguro ?>
        </div>
    <?php endif; ?>

    <div class="attack-zone">
        <strong>Zona blindada:</strong><br>
        El script ahora se muestra como texto, no se ejecuta 😎
    </div>

    <script>
        console.log("Cookies accesibles por JS:", document.cookie);
    </script>

</div>

</body>
</html>