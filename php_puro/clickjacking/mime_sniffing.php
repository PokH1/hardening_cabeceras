<?php
header("Content-Type: text/html");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo Vulnerable - MIME Sniffing</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            color: #fff;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            padding: 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            animation: fadeIn 0.8s ease-in-out;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #ff6b6b;
        }

        p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .highlight {
            color: #ff4d4d;
            font-weight: bold;
        }

        hr {
            border: none;
            height: 1px;
            background: rgba(255,255,255,0.2);
            margin: 20px 0;
        }

        .warning {
            margin-top: 15px;
            padding: 15px;
            background: rgba(255, 0, 0, 0.15);
            border-left: 5px solid #ff4d4d;
            border-radius: 8px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h1>⚠ Ejemplo Vulnerable: MIME Sniffing</h1>

        <p>Esta página <span class="highlight">NO</span> incluye la cabecera de seguridad:</p>

        <p class="highlight">X-Content-Type-Options: nosniff</p>

        <hr>

        <div class="warning">
            El navegador podría interpretar incorrectamente el tipo MIME
            y ejecutar contenido que no debería ejecutarse.
        </div>

        <script>
            alert("⚠ Página vulnerable: no tiene protección contra MIME Sniffing");
        </script>

        <p style="margin-top:20px;">
            Si viste la alerta, significa que el script se ejecutó normalmente.
        </p>
    </div>
</div>

</body>
</html>