<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad Educativa Holanda</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <style>
        /* Aquí colocas tu CSS personalizado */
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
        }
        header {
            background-color: #FF8C42;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            color: white;
        }
        .nav {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .nav a {
            margin: 0 15px;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        .nav a:hover {
            color: #FF8C42;
        }
        .content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        .content img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <header>UNIDAD EDUCATIVA HOLANDA</header>

    <div class="nav">
        <a href="#">Inicio</a>
        <a href="/historia">Historia</a>
        <a href="#">Plantel admin.</a>
        <a href="#">Plantel docente</a>
        <a href="#">Junta escolar</a>
        <a href="#">Iniciar sesión</a>
    </div>

    <div class="content">
        <h1>Unidad Educativa Holanda</h1>
        <p>Es una institución educativa en Santa Cruz que proporciona una formación integral, enfocada en preparar a los estudiantes para que transformen su entorno personal, social y espiritual. Su personal está profundamente comprometido con el avance educativo, creando un ambiente basado en valores que impulsa una educación efectiva y un excelente rendimiento académico.</p>
        <img src="<?php echo e(asset('images/inicio.jpeg')); ?>" alt="Unidad Educativa Holanda">
    </div>
</body>
</html>
<?php /**PATH C:\Users\QUIPUS\gestion-holanda\resources\views/home.blade.php ENDPATH**/ ?>