<!DOCTYPE html>
<html>
<head>
    <title>Modificar Entidad</title>
    <style>
            table {
            border-collapse: collapse;
        }
        label, input, select, button {
            border: 1px solid #000;
            padding: 5px 10px;
            background-color: black;
            color: #206111;
        }
        body{
            background-color: #001A33;
            font-family:sans-serif;
            color: #206111;
        }
        header{
            color: #D1D1D1;
        }
    </style>
</head>
<body>

<h1>Modificar Entidad</h1>

<form method="POST">

    <!-- guardamos el tipo oculto -->
    <input type="hidden" name="tipo" value="<?= $tipo ?>">

    Nombre:<br>
    <input type="text" name="nombre" value="<?= $entidad->getNombre() ?>" required><br><br>

    Planeta:<br>
    <input type="text" name="planeta" value="<?= $entidad->getPlaneta() ?>" required><br><br>

    Estabilidad:<br>
    <input type="number" name="estabilidad" value="<?= $entidad->getEstabilidad() ?>" required><br><br>

    <?php if ($tipo == "vida"): ?>
    Dieta:<br>
    <input type="text" name="dieta" value="<?= $entidad->getDieta() ?>"><br><br>
    <?php endif; ?>

    <?php if ($tipo == "mineral"): ?>
    Dureza:<br>
    <input type="number" name="dureza" value="<?= $entidad->getDureza() ?>"><br><br>
    <?php endif; ?>

    <?php if ($tipo == "artefacto"): ?>
    Antigüedad:<br>
    <input type="number" name="antiguedad" value="<?= $entidad->getAntiguedad() ?>"><br><br>
    <?php endif; ?>

    <button type="submit">Modificar</button>
</form>

<br>
<a href="index.php">Volver</a>

</body>
</html>

