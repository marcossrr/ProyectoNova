<!DOCTYPE html>
<html>
<head>
    <title>Modificar Entidad</title>
</head>
<body>
    <h1>Modificar Entidad</h1>

    <form method="POST">
        Nombre:<br>
        <input type="text" name="nombre" value="<?= $producto->getNombre() ?>" required><br><br>

        Planeta:<br>
        <input type="text" name="planeta" value="<?= $producto->getPlaneta() ?>" required><br><br>

        Nivel de estabilidad:<br>
        <input type="number" step="1" name="estabilidad" value="<?= $producto->getEstabilidad() ?>" required><br><br>

        <button type="submit">Modificar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>