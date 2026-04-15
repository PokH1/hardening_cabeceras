<?php
// ❌ Cookie SIN HttpOnly (vulnerable)
setcookie("session_id", "SESSION123456", [
    "secure" => false,
    "httponly" => false, // 🔴 Vulnerable
    "samesite" => "Lax"
]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Simulación HttpOnly Vulnerable</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            width: 420px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 6px;
            background-color: #e74c3c;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background-color: #c0392b;
        }

        .result {
            margin-top: 15px;
            padding: 10px;
            background: #fff3cd;
            border-radius: 6px;
            border-left: 4px solid #f39c12;
        }

        .attack-zone {
            margin-top: 20px;
            padding: 12px;
            background: #fdecea;
            border-left: 4px solid #e74c3c;
            border-radius: 6px;
            font-size: 14px;
        }

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #eee;
        }

        small {
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Simulación de vulnerabilidad XSS</h2>

    <form method="GET">
        <label>Escribe tu nombre:</label>
        <input type="text" name="nombre" placeholder="Tu nombre aquí">
        <button type="submit">Enviar</button>
        <small>Prueba escribiendo: &lt;script&gt;alert("XSS")&lt;/script&gt;</small>
    </form>

    <hr>

    <?php
    // ❌ Vulnerabilidad XSS (no sanitiza entrada)
    if (isset($_GET['nombre'])) {
        echo "<div class='result'>";
        echo "Bienvenido " . $_GET['nombre'];
        echo "</div>";
    }
    ?>

    <div class="attack-zone">
        <strong>Zona de ataque:</strong><br>
        Intenta inyectar código JavaScript 😉
    </div>

    <script>
        console.log("Cookies actuales:", document.cookie);
    </script>

</div>

</body>
</html>