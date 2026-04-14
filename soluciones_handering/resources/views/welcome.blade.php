<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hardening de Cabeceras | Proyecto Laravel</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #fff;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 15px 40px;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .logo {
            font-weight: bold;
            font-size: 18px;
            color: #00ffb3;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin-left: 25px;
            font-weight: 500;
            transition: 0.3s ease;
        }

        nav a:hover {
            color: #00ffb3;
            text-shadow: 0 0 8px #00ffb3;
        }

        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 100px 20px 60px;
        }

        .hero h1 {
            font-size: 40px;
            margin-bottom: 20px;
            color: #00ffb3;
        }

        .hero p {
            max-width: 700px;
            line-height: 1.7;
            margin-bottom: 30px;
            font-size: 18px;
            opacity: 0.9;
        }

        .btn-primary {
            padding: 12px 28px;
            border-radius: 30px;
            background: #00ffb3;
            color: #003333;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .btn-primary:hover {
            transform: scale(1.08);
            box-shadow: 0 0 20px #00ffb3;
        }

        .features {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            padding: 60px 20px 100px;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            padding: 30px;
            border-radius: 20px;
            width: 300px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            transition: 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(0,0,0,0.5);
        }

        .feature-card h3 {
            margin-bottom: 15px;
            color: #00ffb3;
        }

        .feature-card p {
            font-size: 14px;
            line-height: 1.6;
            opacity: 0.85;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: rgba(0,0,0,0.5);
            font-size: 14px;
            opacity: 0.7;
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
    </div>
</nav>

<section class="hero">
    <h1>Seguridad Web con Laravel</h1>
    <p>
        Implementación práctica de técnicas de hardening de cabeceras HTTP
        para fortalecer aplicaciones web contra vulnerabilidades comunes
        como XSS, MIME Sniffing y robo de sesiones.
    </p>

    <a href="{{ route('mime.solucion') }}" class="btn-primary">
        Explorar Implementaciones
    </a>
</section>

<section class="features">
    <div class="feature-card">
        <h3>🔎 MIME Sniffing</h3>
        <p>
            Protección contra la interpretación incorrecta de tipos de contenido,
            evitando ejecución de archivos maliciosos.
        </p>
    </div>

    <div class="feature-card">
        <h3>🔐 Secure Cookies</h3>
        <p>
            Configuración segura de cookies de sesión utilizando atributos
            HttpOnly, Secure y SameSite.
        </p>
    </div>

    <div class="feature-card">
        <h3>🚀 Laravel</h3>
        <p>
            Aplicación desarrollada en Laravel implementando buenas prácticas
            modernas de seguridad en aplicaciones web.
        </p>
    </div>
</section>

</body>
</html>