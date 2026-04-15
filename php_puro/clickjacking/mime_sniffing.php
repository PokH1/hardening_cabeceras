<?php
header("Content-Type: text/html");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MIME Sniffing Vulnerable - PHP Puro</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; padding-top: 60px; min-height: 100vh; background: linear-gradient(135deg, #1f1c2c, #928dab); color: #fff; }
        nav { background: #333; position: fixed; top: 0; width: 100%; z-index: 1000; }
        nav ul { list-style: none; display: flex; margin: 0; padding: 15px; }
        nav li { margin-right: 20px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ccc; }
        .container { display: flex; justify-content: center; align-items: center; padding: 40px 20px; }
        .card { background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(15px); padding: 40px; border-radius: 20px; width: 100%; max-width: 600px; box-shadow: 0 15px 35px rgba(0,0,0,0.4); }
        h1 { margin-bottom: 20px; font-size: 28px; color: #ff6b6b; }
        p { margin-bottom: 15px; line-height: 1.6; }
        .highlight { color: #ff4d4d; font-weight: bold; }
        hr { border: none; height: 1px; background: rgba(255,255,255,0.2); margin: 20px 0; }
        .warning { margin-top: 15px; padding: 15px; background: rgba(255, 0, 0, 0.15); border-left: 5px solid #ff4d4d; border-radius: 8px; }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="victima.php">Clickjacking</a></li>
            <li><a href="../csp/">CSP</a></li>
            <li><a href="../http_only/http_only_vulnerable.php">HttpOnly</a></li>
            <li><a href="../permission_policy/permission_policy_vulnerable.php">Permissions Policy</a></li>
            <li><a href="../same_site/">SameSite</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="card">
            <h1>Ejemplo Vulnerable: MIME Sniffing</h1>
            <p>Esta página <span class="highlight">NO</span> incluye la cabecera de seguridad:</p>
            <p class="highlight">X-Content-Type-Options: nosniff</p>
            <hr>
            <div class="warning">
                El navegador podría interpretar incorrectamente el tipo MIME
                y ejecutar contenido que no debería ejecutarse.
            </div>
            <p style="margin-top:20px;">
                Si viste la alerta, significa que el script se ejecutó normalmente.
            </p>
        </div>
    </div>
    <script>
        alert("Página vulnerable: no tiene protección contra MIME Sniffing");
    </script>
</body>
</html>
