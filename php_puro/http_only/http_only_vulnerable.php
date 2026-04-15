<?php
// ❌ Cookie SIN HttpOnly (vulnerable)
setcookie("session_id", "SESSION123456", [
    "secure" => false,
    "httponly" => false, // Vulnerable
    "samesite" => "Lax"
]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>HttpOnly Vulnerable - PHP Puro</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding-top: 60px; background: #f4f6f9; }
        nav { background: #333; position: fixed; top: 0; width: 100%; z-index: 1000; }
        nav ul { list-style: none; display: flex; margin: 0; padding: 15px; }
        nav li { margin-right: 20px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ccc; }
        .container { background: white; width: 420px; margin: 40px auto; padding: 30px; border-radius: 10px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); max-width: 800px; }
        h2 { text-align: center; color: #333; margin-bottom: 20px; }
        label { display: block; margin-bottom: 6px; font-weight: bold; }
        input[type="text"] { width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc; margin-bottom: 15px; font-size: 14px; }
        button { width: 100%; padding: 10px; border: none; border-radius: 6px; background-color: #e74c3c; color: white; font-weight: bold; cursor: pointer; transition: 0.2s; }
        button:hover { background-color: #c0392b; }
        .result { margin-top: 15px; padding: 10px; background: #fff3cd; border-radius: 6px; border-left: 4px solid #f39c12; }
        .attack-zone { margin-top: 20px; padding: 12px; background: #fdecea; border-left: 4px solid #e74c3c; border-radius: 6px; font-size: 14px; }
        hr { margin: 20px 0; border: none; border-top: 1px solid #eee; }
        small { color: #888; }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../clickjacking/victima.php">Clickjacking</a></li>
            <li><a href="../csp/">CSP</a></li>
            <li><a href="http_only_vulnerable.php">HttpOnly</a></li>
            <li><a href="../permission_policy/permission_policy_vulnerable.php">Permissions Policy</a></li>
            <li><a href="../same_site/">SameSite</a></li>
            <li><a href="../secure_cookie/Secure_Cookie.php">SecureCookie</a></li>
            <li><a href="../mime_sniffing/mime_sniffing.php">MIMESniffing</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Simulación de vulnerabilidad HttpOnly</h2>
        <form method="GET">
            <label>Escribe tu nombre:</label>
            <input type="text" name="nombre" placeholder="Tu nombre aquí">
            <button type="submit">Enviar</button>
            <small>Prueba escribiendo: <script>alert("XSS")</script></small>
        </form>
        <hr>
        <?php
        // Vulnerabilidad XSS (no sanitiza entrada)
        if (isset($_GET['nombre'])) {
            echo "<div class='result'>";
            echo "Bienvenido " . $_GET['nombre'];
            echo "</div>";
        }
        ?>
        <div class="attack-zone">
            <strong>Zona de ataque:</strong><br>
            Intenta inyectar código JavaScript para robar la cookie sin HttpOnly
        </div>
    </div>
    <script>
        console.log("Cookies actuales:", document.cookie);
    </script>
</body>
</html>
