<!DOCTYPE html>
<html>
<head>
    <title>Gana un iPhone 🎁</title>
    <style>
        body {
            text-align: center;
            margin-top: 100px;
        }

        .contenedor {
            position: relative;
            width: 250px;
            height: 80px;
            margin: auto;
        }

        .boton-falso {
            position: absolute;
            width: 250px;
            height: 80px;
            background: green;
            color: white;
            font-size: 20px;
            text-align: center;
            line-height: 80px;
            cursor: pointer;
            z-index: 1;
        }

        iframe {
            position: absolute;
            width: 250px;
            height: 80px;
            opacity: 0;
            z-index: 2;
            border: none;
        }
        nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: rgba(15, 23, 42, 0.85);
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.4);
    z-index: 1000;
}

.nav-container {
    max-width: 1100px;
    margin: auto;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    color: #38bdf8;
    font-weight: bold;
    font-size: 18px;
}

.links a {
    color: #e2e8f0;
    text-decoration: none;
    margin-left: 20px;
    font-size: 14px;
    position: relative;
    transition: 0.3s;
}

.links a::after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    background: #38bdf8;
    left: 0;
    bottom: -5px;
    transition: 0.3s;
}

.links a:hover {
    color: #38bdf8;
}

.links a:hover::after {
    width: 100%;
}
    </style>
</head>
<body>

<nav>
    <div class="nav-container">
        <div class="logo">🛡 Hardening Project</div>

        <div class="links">
            <a href="{{ route('inicio') }}">Inicio</a>
            <a href="{{ route('mime.solucion') }}">MIME Sniffing</a>
            <a href="{{ route('cookie.solucion') }}">Secure Cookie</a>
            <a href="{{ route('csp') }}">CSP</a>
            <a href="{{ route('same-site.solucion') }}">SameSite</a>
            <a href="{{ route('http-only') }}">HttpOnly</a>
            <a href="{{ route('permission-policy') }}">Permissions Policy</a>
            <a href="{{ route('atacante') }}">Atacante</a>
        </div>
    </div>
</nav>
<h2>Haz clic para ganar un iPhone 📱</h2>

<div class="contenedor">
    <div class="boton-falso">Haz clic aquí</div>
    <iframe src="/victima"></iframe>
</div>

</body>
</html>