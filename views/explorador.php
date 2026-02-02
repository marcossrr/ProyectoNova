<!DOCTYPE html>
<html>
<head>
    <title>Explorador de entidades</title>
</head>
<body>
    <h1>Entidades cosmicas</h1>

    <a href="index.php?accion=registro">Registrar entidad</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Planeta de origen</th>
            <th>Nivel de estabilidad</th>
        </tr>
        <tr>
            <th>Dieta</th>
            <th>Dureza</th>
            <th>Antiguedad</th>
        </tr>

        <?php foreach ($entidades as $e): ?>
        <tr>
            <td><?= $e->getId() ?></td>
            <td><?= $e->getNombre() ?></td>
            <td><?= $e->getPlaneta() ?></td>
            <td><?= $e->getEstabilidad() ?></td>
        </tr>
        <tr>
            <td><?= $e->getDieta() ?></td>
            <td><?= $e->getDureza() ?></td>
            <td><?= $e->getAntiguedad() ?></td>
        </tr>
        <tr>
        
                <a href="index.php?accion=modificacion&id=<?= $p->getId() ?>">Modificar</a>
                |
                <a href="index.php?accion=expulsion&id=<?= $p->getId() ?>">Expulsar</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>