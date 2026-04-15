<!DOCTYPE html>
<html>
<head>
    <title>Clickjacking Exito - PHP Puro</title>
    <meta charset="UTF-8">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; padding-top: 60px; background: #f5f5f5; text-align: center; }
        nav { background: #333; position: fixed; top: 0; width: 100%; z-index: 1000; }
        nav ul { list-style: none; display: flex; margin: 0; padding: 15px; }
        nav li { margin-right: 20px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ccc; }
        .container { max-width: 600px; margin: 40px auto; padding: 40px 20px; }
        h1 { color: #dc3545; margin-bottom: 20px; }
        p { color: #666; margin-bottom: 20px; }
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
        </ul>
    </nav>
    <div class="container">
        <h1>Cuenta eliminada exitosamente</h1>
        <p>El clickjacking funcionó perfectamente. El usuario hizo clic sin saberlo en "Eliminar Cuenta".</p>
        <p><a href="../index.php" style="color:#007bff; text-decoration:none;">← Volver al menú principal</a></p>
    </div>
</body>
</html>

