<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laravel Secure Permission Policy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>nav {
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
}</style>
</head>
<body class="bg-gradient-to-r from-slate-900 to-slate-700 flex items-center justify-center h-screen">

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
<div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-xl text-white text-center w-96">
    <h1 class="text-2xl font-bold mb-4">🔐 Permission-Policy Segura</h1>
    
    <p class="mb-2">✔ Geolocalización bloqueada</p>
    <p class="mb-2">✔ Cámara bloqueada</p>
    <p class="mb-2">✔ Micrófono bloqueado</p>
    <p class="mb-2">✔ Payment API bloqueada</p>
    <p class="mb-4">✔ Fullscreen permitido solo en este dominio</p>

    <button onclick="testGeo()" 
        class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg transition">
        Probar Geolocalización
    </button>

    <p id="result" class="mt-4 text-sm"></p>
</div>

<script>
function testGeo() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            () => {
                document.getElementById("result").innerText = 
                    "No debería funcionar si está bloqueado por policy.";
            },
            (error) => {
                document.getElementById("result").innerText = 
                    "✔ Bloqueado correctamente por Permission-Policy";
            }
        );
    }
}
</script>

</body>
</html>