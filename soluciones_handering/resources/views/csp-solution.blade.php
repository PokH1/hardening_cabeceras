<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSP Solucion</title>
</head>
<body>
    <h1>CSP mitigado</h1>
    <p>Se aplica cabecera Content-Security-Policy con nonce.</p>
    <p>El payload se imprime escapado:</p>
    <pre>{{ request('payload', '<script>alert("XSS")</script>') }}</pre>

    <script nonce="{{ app('cspNonce') }}">
        console.log('Script permitido por nonce CSP');
    </script>
</body>
</html>
