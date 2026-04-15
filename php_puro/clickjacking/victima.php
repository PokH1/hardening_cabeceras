<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Clickjacking Vulnerable - PHP Puro</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; padding-top: 60px; background: #f5f5f5; }
        nav { background: #333; position: fixed; top: 0; width: 100%; z-index: 1000; }
        nav ul { list-style: none; display: flex; margin: 0; padding: 15px; }
        nav li { margin-right: 20px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ccc; }
        .container { max-width: 600px; margin: 40px auto; padding: 20px; text-align: center; }
        button { width: 200px; height: 60px; font-size: 18px; background: #dc3545; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #c82333; }
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
        <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "<h2 style='color:red;'>Acción ejecutada!</h2>";
            echo "<meta http-equiv='refresh' content='2;url=exito.php'>";
        } else {
        ?>
        <h2>Víctima - Sitio Legítimo</h2>
        <form method="POST">
            <button type="submit">Eliminar Cuenta</button>
        </form>
        <p style="margin-top:20px; font-size:14px; color:#666;">Esta página es vulnerable a clickjacking (sin X-Frame-Options).</p>
        <?php } ?>
    </div>
</body>
</html>

