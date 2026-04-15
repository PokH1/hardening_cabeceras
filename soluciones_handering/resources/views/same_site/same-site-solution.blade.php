<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SameSite Solucion</title>

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
            max-width: 600px;
            margin: 50px auto;
            background: #1e293b;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.4);
        }

        h1 {
            color: #38bdf8;
            margin-bottom: 10px;
        }

        p {
            line-height: 1.6;
        }

        code {
            background: #020617;
            padding: 3px 6px;
            border-radius: 5px;
            color: #38bdf8;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            outline: none;
            margin-top: 5px;
            background: #020617;
            color: #e2e8f0;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #38bdf8;
            border: none;
            border-radius: 10px;
            color: #0f172a;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0ea5e9;
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
    <h1>SameSite mitigado</h1>

    <p>Sesión con <code>SameSite=Strict</code> y cookie <code>Secure</code>.</p>

    <p>Transferencia protegida con CSRF:</p>

    <form method="POST" action="/transfer">
        @csrf
        <label>
            Monto:
            <input name="amount" value="1000">
        </label>

        <label>
            Destino:
            <input name="to" value="beneficiario">
        </label>

        <button type="submit">Transferir</button>
    </form>
</div>

</body>
</html>