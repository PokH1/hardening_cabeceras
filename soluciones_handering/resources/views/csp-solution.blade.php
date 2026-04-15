<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSP Solucion</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: #e2e8f0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #1e293b;
            padding: 15px 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .logo {
            font-weight: bold;
            font-size: 18px;
            color: #38bdf8;
        }

        nav a {
            color: #e2e8f0;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #38bdf8;
        }

        .container {
            padding: 40px;
            max-width: 800px;
            margin: auto;
        }

        h1 {
            color: #38bdf8;
        }

        p {
            line-height: 1.6;
        }

        pre {
            background: #020617;
            padding: 15px;
            border-radius: 10px;
            overflow-x: auto;
            border: 1px solid #1e293b;
        }
    </style>

</head>
<body>

<nav>
    <div class="logo">🛡 Hardening Project</div>
    <div>
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('mime.solucion') }}">MIME Sniffing</a>
        <a href="{{ route('cookie.solucion') }}">Secure Cookie</a>
        <a href="{{ route('csp') }}">CSP</a>
        <a href="{{ route('same-site.solucion') }}">SameSite</a>
        <a href="{{ route('http-only') }}">HttpOnly</a>
    </div>
</nav>

<div class="container">
    <h1>CSP mitigado</h1>

    <p>Se aplica cabecera <strong>Content-Security-Policy</strong> con nonce.</p>

    <p>El payload se imprime escapado:</p>

    <pre>{{ request('payload', '<script>alert("XSS")</script>') }}</pre>
</div>

<script nonce="{{ $nonce }}">
    console.log('Script permitido por nonce CSP');
</script>

</body>
</html>