<!DOCTYPE html>
<html>
<head>
    <title>Registro entidades</title>
</head>
<body>
    <h1>Registro de entidades</h1>

    <form method="POST">

        Tipo de entidad:<br>
        <select name="tipo" required>
            <option value="">-- Selecciona tipo --</option>
            <option value="vida">Forma de vida</option>
            <option value="artefacto">Artefacto</option>
            <option value="mineral">Mineral raro</option>
        </select>
        <br><br>

        Nombre:<br>
        <input type="text" name="nombre" required><br><br>

        Planeta:<br>
        <input type="text" name="planeta" required><br><br>

        Nivel de estabilidad:<br>
        <input type="number" step="1" name="estabilidad" required><br><br>

        <button type="submit">Registrar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
