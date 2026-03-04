<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SameSite Solucion</title>
</head>
<body>
    <h1>SameSite mitigado</h1>
    <p>Sesion con <code>SameSite=Strict</code> y cookie <code>Secure</code>.</p>
    <p>Transferencia protegida con CSRF:</p>

    <form method="POST" action="/transfer">
        @csrf
        <label>Monto: <input name="amount" value="1000"></label><br>
        <label>Destino: <input name="to" value="beneficiario"></label><br>
        <button type="submit">Transferir</button>
    </form>
</body>
</html>
