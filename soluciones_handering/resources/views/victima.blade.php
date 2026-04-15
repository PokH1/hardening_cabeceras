<!DOCTYPE html>
<html>
<head>
    <title>Banco Seguro</title>
</head>
<body style="text-align:center; margin-top:100px;">

<h2>Panel Bancario</h2>

<form method="POST" action="/transferir">
    @csrf
    <button style="padding:20px; background:red; color:white; font-size:18px;">
        Transferir $1000
    </button>
</form>

</body>
</html>