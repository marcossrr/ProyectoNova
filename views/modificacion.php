<!DOCTYPE html>
<html>
<head>
    <title>Modificar Entidad</title>
</head>
<body>
    <h1>Modificar Entidad</h1>

    <form method="POST">
        Nombre:<br>
        <input type="text" name="nombre" value="<?= $entidad->getNombre() ?>" required><br><br>

        Planeta:<br>
        <input type="text" name="planeta" value="<?= $entidad->getPlaneta() ?>" required><br><br>

        Nivel de estabilidad:<br>
        <input type="number" step="1" name="estabilidad" value="<?= $entidad->getEstabilidad() ?>" required><br><br>

        Dieta:<br>
        <input type="text" name="dieta" value="<?= $entidad->getDieta() ?>"><br><br>

        Dureza:<br>
        <input type="number" step="1" name="dureza" value="<?= $entidad->getDureza() ?>" required><br><br>

        Antigüedad:<br>
        <input type="number" step="1" name="antiguedad" value="<?= $entidad->getAntiguedad() ?>" required><br><br>

        <button type="submit">Modificar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>