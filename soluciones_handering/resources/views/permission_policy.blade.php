<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laravel Secure Permission Policy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-slate-900 to-slate-700 flex items-center justify-center h-screen">

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