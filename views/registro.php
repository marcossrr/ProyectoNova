<!DOCTYPE html>
<html>
<head>
    <title>Registro entidades</title>
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
    <h1>Registro de entidades</h1>

    <form method="POST">

        Tipo de entidad:<br>
        <select name="tipo" required>
            <option value="vida">Forma de vida</option>
            <option value="mineral">Mineral raro</option>
            <option value="artefacto">Artefacto</option>
        </select>
        <br><br>
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

        <button type="submit" class="registrar">Registrar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
