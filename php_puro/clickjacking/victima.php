<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<script>
            alert('Acción ejecutada');
            top.location = 'exito.php';
          </script>";
    exit();
}
?>

<!DOCTYPE html>
<html>
<body style="margin:0;">
<form method="POST">
    <button type="submit" style="width:200px;height:60px;">
        Eliminar Cuenta
    </button>
</form>
</body>
</html>

