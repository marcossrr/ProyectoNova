<!DOCTYPE html>
<html>
<head>
    <title>Explorador de entidades</title>
</head>
<body>
    <h1>Entidades</h1>

    <a href="index.php?accion=registro">Registrar entidad</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Planeta de origen</th>
            <th>Nivel de estabilidad</th>
        </tr>

        <?php foreach ($entidades as $e): ?>
        <tr>
            <td><?= $p->getId() ?></td>
            <td><?= $p->getNombre() ?></td>
            <td><?= $p->getPlaneta() ?></td>
            <td><?= $e->getEstabilidad() ?></td>
            <td>
                <a href="index.php?accion=modificacion&id=<?= $p->getId() ?>">Modificar</a>
                |
                <a href="index.php?accion=expulsion&id=<?= $p->getId() ?>">Expulsar</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>