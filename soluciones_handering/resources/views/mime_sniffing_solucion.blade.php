@php
    header("Content-Type: text/html");
    header("X-Content-Type-Options: nosniff");
@endphp

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Solución - MIME Sniffing</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #134e5e, #71b280);
            color: #fff;
        }

        nav {
            background: rgba(0, 0, 0, 0.6);
            padding: 15px 30px;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin-right: 20px;
            font-weight: 500;
            transition: 0.3s ease;
        }

        nav a:hover {
            color: #00ffb3;
            text-shadow: 0 0 8px #00ffb3;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            padding: 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            animation: fadeIn 0.8s ease-in-out;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #00ffb3;
        }

        p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .highlight {
            color: #00ffb3;
            font-weight: bold;
        }

        hr {
            border: none;
            height: 1px;
            background: rgba(255,255,255,0.2);
            margin: 20px 0;
        }

        .success-box {
            margin-top: 15px;
            padding: 15px;
            background: rgba(0, 255, 150, 0.15);
            border-left: 5px solid #00ffb3;
            border-radius: 8px;
        }

        .status {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 12px;
            border-radius: 20px;
            background: #00ffb3;
            color: #003333;
            font-weight: bold;
            font-size: 14px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
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
    <div class="card">
        <h1>🛡 Solución: MIME Sniffing</h1>

        <p>Esta página incluye la cabecera de seguridad:</p>

        <p class="highlight">X-Content-Type-Options: nosniff</p>

        <hr>

        <div class="success-box">
            El navegador ya no intentará interpretar incorrectamente
            el tipo de contenido enviado por el servidor.
        </div>

        <div class="status">PROTEGIDO</div>

        <script>
            alert("Página protegida contra MIME Sniffing");
        </script>

        <p style="margin-top:20px;">
            Ahora el contenido se procesa únicamente según el tipo MIME declarado.
        </p>
    </div>
</div>

</body>
</html>