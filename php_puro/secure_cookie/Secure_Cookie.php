<?php
// Iniciamos sesión SIN parámetros seguros
session_start();

// Simulamos usuario autenticado
$_SESSION['usuario'] = "admin";

// Datos para logs
$session_id = session_id();
$user_ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$fecha = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Secure Cookie Vulnerable - PHP Puro</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding-top: 60px; min-height: 100vh; background: linear-gradient(135deg, #2c0b0e, #8b0000); color: #fff; }
        nav { background: #333; position: fixed; top: 0; width: 100%; z-index: 1000; }
        nav ul { list-style: none; display: flex; margin: 0; padding: 15px; }
        nav li { margin-right: 20px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ccc; }
        .container { display: flex; justify-content: center; padding: 40px 20px; max-width: 800px; margin: 0 auto; }
        .card { background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(15px); padding: 40px; border-radius: 20px; width: 100%; max-width: 700px; box-shadow: 0 15px 35px rgba(0,0,0,0.4); }
        h1 { margin-bottom: 20px; color: #ff4d4d; }
        p { margin-bottom: 15px; line-height: 1.6; }
        button { padding: 10px 18px; border: none; border-radius: 8px; background: #ff4d4d; color: white; font-weight: bold; cursor: pointer; transition: 0.3s; }
        button:hover { background: #ff1a1a; }
        .log-box { margin-top: 25px; padding: 15px; background: rgba(0,0,0,0.4); border-radius: 10px; font-family: monospace; font-size: 14px; max-height: 200px; overflow-y: auto; }
        .status { display: inline-block; padding: 6px 12px; border-radius: 20px; background: #ff4d4d; font-weight: bold; margin-bottom: 15px; }
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
            <li><a href="Secure_Cookie.php">SecureCookie</a></li>
            <li><a href="../mime_sniffing/mime_sniffing.php">MIMESniffing</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="card">
            <h1>Session Cookie Vulnerable</h1>
            <div class="status">VULNERABLE</div>
            <p>La sesión fue creada sin atributos de seguridad:</p>
            <ul>
                <li>Secure No</li>
                <li>HttpOnly No</li>
                <li>SameSite No</li>
            </ul>
            <br>
            <button onclick="verCookie()">Intentar robar sesión (JS)</button>
            <p id="resultado" style="margin-top:15px;"></p>
            <div class="log-box">
                <strong>Logs del servidor:</strong><br><br>
                [<?= $fecha ?>] Sesión iniciada<br>
                Session ID: <?= $session_id ?><br>
                Usuario: <?= $_SESSION['usuario'] ?><br>
                IP: <?= $user_ip ?><br>
                User-Agent: <?= $user_agent ?><br>
                Estado: Cookie accesible por JavaScript<br>
            </div>
        </div>
    </div>
    <script>
    function verCookie() {
        const cookies = document.cookie;
        document.getElementById("resultado").innerText =
            "Cookies accesibles desde JS: " + cookies;
    }
    </script>
</body>
</html>
