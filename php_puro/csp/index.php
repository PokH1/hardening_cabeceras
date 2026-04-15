<?php
$payload = $_GET['payload'] ?? '<b>Sin payload</b>';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSP Vulnerable - PHP Puro</title>
</head>
<body>
    <h1>CSP vulnerable</h1>
    <p>No se envía Content-Security-Policy y el input se renderiza sin escapar.</p>
    <?php echo $payload; ?>
    <hr>
    <p>Prueba:</p>
    <code>?payload=&lt;script&gt;alert("XSS")&lt;/script&gt;</code>
</body>
</html>
