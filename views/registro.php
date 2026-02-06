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
            <option value="vida">Forma de vida</option>
            <option value="mineral">Mineral raro</option>
            <option value="artefacto">Artefacto</option>
        </select>

        Nombre:<br>
        <input type="text" name="nombre" required><br><br>

        Planeta:<br>
        <input type="text" name="planeta" required><br><br>

        Nivel de estabilidad:<br>
        <input type="number" step="1" name="estabilidad" required><br><br>

        Dieta:<br>        
        <input type="text" name="dieta"><br><br>

        Dureza:<br>
        <input type="number" step="1" name="dureza"><br><br>

        Antigüedad:<br>
        <input type="number" step="1" name="antiguedad"><br><br>

        <button type="submit">Registrar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
