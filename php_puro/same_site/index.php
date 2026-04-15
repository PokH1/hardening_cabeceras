<?php
setcookie('bank_session', 'demo-insecure-session', [
    'expires' => time() + 3600,
    'path' => '/',
    'secure' => false,
    'httponly' => true,
    'samesite' => 'None',
]);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SameSite Vulnerable - PHP Puro</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; padding-top: 60px; background: #f5f5f5; }
        nav { background: #333; position: fixed; top: 0; width: 100%; z-index: 1000; }
        nav ul { list-style: none; display: flex; margin: 0; padding: 15px; }
        nav li { margin-right: 20px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ccc; }
        .container { max-width: 800px; margin: 40px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        label { display: block; margin-bottom: 10px; }
        input { padding: 8px; margin-right: 10px; }
        button { padding: 10px 20px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../clickjacking/victima.php">Clickjacking</a></li>
            <li><a href="../csp/">CSP</a></li>
            <li><a href="../http_only/http_only_vulnerable.php">HttpOnly</a></li>
            <li><a href="../permission_policy/permission_policy_vulnerable.php">Permissions Policy</a></li>
            <li><a href="index.php">SameSite</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>SameSite vulnerable</h1>
        <p>Cookie con <code>SameSite=None</code> y sin <code>Secure</code>.</p>
        <p>Endpoint de transferencia sin token CSRF:</p>
        <form method="POST" action="transfer.php">
            <label>Monto: <input name="amount" value="1000"></label><br>
            <label>Destino: <input name="to" value="atacante"></label><br>
            <button type="submit">Transferir</button>
        </form>
        <hr>
        <a href="atacante.php">Simular ataque CSRF</a>
    </div>
</body>
</html>
