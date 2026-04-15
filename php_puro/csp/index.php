<?php
$payload = $_GET['payload'] ?? '<b>Sin payload</b>';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSP Demo Interactivo - PHP Puro</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; padding-top: 60px; background: #f5f5f5; }
        nav { background: #333; position: fixed; top: 0; width: 100%; z-index: 1000; }
        nav ul { list-style: none; display: flex; margin: 0; padding: 15px; }
        nav li { margin-right: 20px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ccc; }
        .container { max-width: 900px; margin: 40px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .tab { display: inline-block; padding: 10px 20px; background: #eee; border: none; cursor: pointer; margin-right: 5px; border-radius: 5px 5px 0 0; }
        .tab.active { background: #007bff; color: white; }
        .tab-content { display: none; padding: 20px; border: 1px solid #ddd; border-top: none; border-radius: 0 0 5px 5px; }
        .tab-content.active { display: block; }
        input[type="text"] { width: 300px; padding: 10px; margin: 10px 0; }
        button { padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; margin-right: 10px; }
        .output { margin-top: 20px; padding: 15px; background: #f8f9fa; border-radius: 5px; min-height: 50px; }
        .vulnerable { border-left: 4px solid #dc3545; }
        .secure { border-left: 4px solid #28a745; }
        .warning { color: #dc3545; font-weight: bold; }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../clickjacking/atacante.php">Clickjacking</a></li>
            <li><a href="index.php">CSP</a></li>
            <li><a href="../http_only/http_only_vulnerable.php">HttpOnly</a></li>
            <li><a href="../permission_policy/permission_policy_vulnerable.php">Permissions Policy</a></li>
            <li><a href="../same_site/">SameSite</a></li>
            <li><a href="../secure_cookie/Secure_Cookie.php">SecureCookie</a></li>
            <li><a href="../mime_sniffing/mime_sniffing.php">MIMESniffing</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>CSP Demo Interactivo</h1>
        <p>Prueba ataques XSS en tiempo real y ve cómo CSP bloquea inline scripts.</p>
        
        <div style="margin: 30px 0;">
            <button class="tab active" onclick="showTab('vulnerable')">Sin CSP (Vulnerable)</button>
        </div>

        <!-- Vulnerable -->
        <div id="vulnerable" class="tab-content active vulnerable">
            <h3>Sin Content-Security-Policy</h3>
            <input type="text" id="payload1" placeholder="Escribe <script>alert('XSS')</script>">
            <button onclick="testVulnerable()">Probar XSS</button>
            <div id="output1" class="output">Escribe un payload y haz clic en Probar.</div>
        </div>

        <!-- Secure -->
        <div id="secure" class="tab-content secure">
            <h3>Con CSP: script-src 'self'</h3>
            <input type="text" id="payload2" placeholder="Escribe <script>alert('XSS')</script>">
            <button onclick="testSecure()">Probar XSS</button>
            <div id="output2" class="output">Escribe un payload y haz clic en Probar. CSP debería bloquearlo.</div>
            <p class="warning">Nota: Ver consola del navegador (F12) para ver errores CSP bloqueados.</p>
        </div>

        <hr>
        <h3>Headers CSP</h3>
        <p><code>Content-Security-Policy: default-src 'self'; script-src 'self';</code></p>
    </div>

    <script>
        function showTab(tabName) {
            document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
            document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
            document.getElementById(tabName).classList.add('active');
            event.target.classList.add('active');
        }

        function testVulnerable() {
            const payload = document.getElementById('payload1').value || 'Sin payload';
            document.getElementById('output1').innerHTML = `
                <strong>Vulnerable:</strong> ${payload}
                <div style="margin-top:10px; padding:10px; background:#dc3545; color:white;">
                    XSS EXECUTADO ✅ (Sin CSP)
                </div>
            `;
        }

        function testSecure() {
            const payload = document.getElementById('payload2').value || 'Sin payload';
            document.getElementById('output2').innerHTML = `
                <strong>Intento bloqueado:</strong> ${payload}
                <div style="margin-top:10px; padding:10px; background:#28a745; color:white;">
                    CSP BLOQUEA SCRIPT ❌ (script-src 'self')
                </div>
            `;
        }
    </script>
</body>
</html>

