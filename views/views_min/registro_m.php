<!DOCTYPE html>
<html>
<head>
    <title>Registro entidades</title>
</head>
<body>
    <h1>Registro de entidades</h1>

    <form method="POST">

        Nombre:<br>
        <input type="text" name="nombre" required><br><br>

        Planeta:<br>
        <input type="text" name="planeta" required><br><br>

        Nivel de estabilidad:<br>
        <input type="number" step="1" name="estabilidad" required><br><br>

        Dureza:<br>
        <input type="number" step="1" name="dureza" required><br><br>

        <button type="submit">Registrar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
