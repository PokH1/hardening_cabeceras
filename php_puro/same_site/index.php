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
</head>
<body>
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
</body>
</html>
