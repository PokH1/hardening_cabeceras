<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Puro - Hardening Seguridad</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; padding-top: 60px; background: #f5f5f5; }
        nav { background: #333; position: fixed; top: 0; width: 100%; z-index: 1000; }
        nav ul { list-style: none; display: flex; margin: 0; padding: 15px; }
        nav li { margin-right: 20px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ccc; }
        .container { max-width: 800px; margin: 40px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #333; margin-bottom: 20px; }
        .section { margin-bottom: 30px; padding: 20px; border-left: 4px solid #007bff; background: #f8f9fa; }
        .section h3 { margin-bottom: 10px; }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="clickjacking/atacante.php">Clickjacking</a></li>
            <li><a href="csp/">CSP</a></li>
            <li><a href="http_only/http_only_vulnerable.php">HttpOnly</a></li>
            <li><a href="permission_policy/permission_policy_vulnerable.php">Permissions Policy</a></li>
            <li><a href="same_site/">SameSite</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>PHP Puro - Demostraciones Hardening</h1>
        <div class="section">
            <h3>Clickjacking Protection</h3>
            <p>Demostración de vulnerabilidad clickjacking y protecciones relacionadas (X-Frame-Options, CSP frame-ancestors).</p>
            <a href="clickjacking/atacante.php">Ver demo</a>
        </div>
        <div class="section">
            <h3>CSP (Content Security Policy)</h3>
            <p>Vulnerable a XSS por falta de CSP.</p>
            <a href="csp/">Ver demo</a>
        </div>
        <div class="section">
            <h3>HttpOnly Cookies</h3>
            <p>Cookie de sesión sin HttpOnly, vulnerable a XSS.</p>
            <a href="http_only/http_only_vulnerable.php">Ver demo</a>
        </div>
        <div class="section">
            <h3>Permissions Policy</h3>
            <p>Configuración permisiva que expone APIs del navegador.</p>
            <a href="permission_policy/permission_policy_vulnerable.php">Ver demo</a>
        </div>
        <div class="section">
            <h3>SameSite Cookies</h3>
            <p>Cookie con SameSite=None vulnerable a CSRF.</p>
            <a href="same_site/">Ver demo</a>
        </div>
    </div>
</body>
</html>
