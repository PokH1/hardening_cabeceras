<?php
$amount = $_POST['amount'] ?? '0';
$to = $_POST['to'] ?? 'desconocido';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Transferencia Insegura</title>
</head>
<body>
    <h1>Transferencia INSEGURA ejecutada</h1>
    <p>Monto: <?php echo htmlspecialchars($amount, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>Destino: <?php echo htmlspecialchars($to, ENT_QUOTES, 'UTF-8'); ?></p>
    <a href="index.php">Volver</a>
</body>
</html>
