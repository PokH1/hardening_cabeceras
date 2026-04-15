<!DOCTYPE html>
<html>
<head>
    <title>Login Vulnerable</title>
</head>
<body>
    <p style="color:red;">
⚠ Esta página usa HTTP. Los datos no están cifrados.
</p>
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuario"><br><br>
        <input type="password" name="password" placeholder="Contraseña"><br><br>
        <button type="submit">Iniciar sesión</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Datos recibidos:</h3>";
    echo "Usuario: " . $_POST["usuario"] . "<br>";
    echo "Password: " . $_POST["password"];
}
?>
</body>
</html>