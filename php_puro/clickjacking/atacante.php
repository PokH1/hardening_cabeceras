<!DOCTYPE html>
<html>
<head>
    <title>Demo Clickjacking</title>
    <meta charset="UTF-8">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; padding-top: 60px; background: #f5f5f5; }
        nav { background: #333; position: fixed; top: 0; width: 100%; z-index: 1000; }
        nav ul { list-style: none; display: flex; margin: 0; padding: 15px; }
        nav li { margin-right: 20px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ccc; }
        h2 { text-align: center; margin: 40px 0; }
        .contenedor { position: relative; width: 200px; height: 60px; margin: 100px auto; }
        .boton-falso { position: absolute; width: 200px; height: 60px; background: green; color: white; font-size: 18px; text-align: center; line-height: 60px; cursor: pointer; z-index: 1; }
        iframe { position: absolute; width: 200px; height: 60px; opacity: 0; z-index: 2; border: none; }
        p { text-align: center; max-width: 600px; margin: 20px auto; color: #666; }
        .boton-falso:hover { background: darkgreen; }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="atacante.php">Clickjacking</a></li>
            <li><a href="../csp/">CSP</a></li>
            <li><a href="../http_only/http_only_vulnerable.php">HttpOnly</a></li>
            <li><a href="../permission_policy/permission_policy_vulnerable.php">Permissions Policy</a></li>
            <li><a href="../same_site/">SameSite</a></li>
            <li><a href="../secure_cookie/Secure_Cookie.php">SecureCookie</a></li>
            <li><a href="../mime_sniffing/mime_sniffing.php">MIMESniffing</a></li>
        </ul>
    </nav>
    <h2>Haz clic para ganar un premio</h2>
    <div class="contenedor">
        <div class="boton-falso" onclick="window.location.href='exito.php'">Haz clic aquí</div>
    </div>
    <p>Demostración simplificada de clickjacking: el botón falso redirige directamente a exito.php (simulando éxito del ataque).</p>
</body>
</html>

