<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Session Cookie Segura</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;}

body{
    font-family:'Segoe UI',sans-serif;
    min-height:100vh;
    background:linear-gradient(135deg,#0f2027,#2c5364);
    color:#fff;
}

nav{
    background:rgba(0,0,0,0.6);
    padding:15px 30px;
    backdrop-filter:blur(10px);
    box-shadow:0 4px 15px rgba(0,0,0,0.3);
}

nav a{
    color:#fff;
    text-decoration:none;
    margin-right:20px;
    transition:.3s;
}

nav a:hover{
    color:#00ffb3;
    text-shadow:0 0 8px #00ffb3;
}

.container{
    display:flex;
    justify-content:center;
    padding:60px 20px;
}

.card{
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(15px);
    padding:40px;
    border-radius:20px;
    width:100%;
    max-width:750px;
    box-shadow:0 15px 35px rgba(0,0,0,0.4);
}

h1{
    color:#00ffb3;
    margin-bottom:20px;
}

.status{
    display:inline-block;
    padding:6px 14px;
    border-radius:20px;
    background:#00ffb3;
    color:#003333;
    font-weight:bold;
    margin-bottom:20px;
}

button{
    padding:10px 18px;
    border:none;
    border-radius:8px;
    background:#00ffb3;
    color:#003333;
    font-weight:bold;
    cursor:pointer;
    transition:.3s;
}

button:hover{
    background:#00cc92;
}

.log-box{
    margin-top:25px;
    padding:15px;
    background:rgba(0,0,0,0.4);
    border-radius:10px;
    font-family:monospace;
    font-size:14px;
    max-height:220px;
    overflow-y:auto;
}

.success{
    color:#00ffb3;
    font-weight:bold;
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

<h1>🛡 Session Cookie Hardened (Laravel)</h1>
<div class="status">PROTEGIDO</div>

<p class="success">La sesión usa atributos de seguridad configurados en Laravel:</p>

<ul>
    <li>HttpOnly → Activado ✅</li>
    <li>SameSite=Strict → Activado ✅</li>
    <li>Secure → {{ request()->isSecure() ? 'Activado (HTTPS)' : 'Desactivado (HTTP Localhost)' }}</li>
</ul>

<br>

<button onclick="verCookie()">Intentar acceder desde JavaScript</button>
<p id="resultado" style="margin-top:15px;"></p>

<div class="log-box">
<strong>Información de sesión:</strong><br><br>

Fecha: {{ now() }}<br>
Session ID: {{ session()->getId() }}<br>
Usuario: {{ session('usuario') ?? 'No definido' }}<br>
IP: {{ request()->ip() }}<br>
User-Agent: {{ request()->userAgent() }}<br>
HttpOnly: Activo<br>
SameSite: Strict<br>
Secure: {{ request()->isSecure() ? 'Activo' : 'No (HTTP Local)' }}<br>
Estado esperado: Cookie NO accesible vía JavaScript<br>

</div>

</div>
</div>

<script>
function verCookie(){
    const cookies = document.cookie;

    if(cookies.includes("laravel_session")){
        document.getElementById("resultado").innerText =
        "⚠ Vulnerabilidad detectada: laravel_session visible";
    }else{
        document.getElementById("resultado").innerText =
        "✅ laravel_session NO es accesible desde JavaScript";
    }
}
</script>

</body>
</html>