<!DOCTYPE html>
<html>
<head>
    <title>Explorador de entidades</title>
</head>
<body>
    <h1>Entidades cósmicas</h1>

    <a href="index.php?accion=registro">Registrar entidad</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Planeta</th>
            <th>Estabilidad</th>
            <th>Dieta</th>
            <th>Dureza</th>
            <th>Antigüedad</th>
            <th>Acciones</th>
        </tr>

        <?php foreach ($entidades as $e): ?>
            <?php if (!$e) continue; // saltar si es null ?>

            <tr>
                <td><?= $e->getId() ?></td>
                <td><?= $e->getNombre() ?></td>
                <td><?= $e->getPlaneta() ?></td>
                <td><?= $e->getEstabilidad() ?></td>

                <td>
                    <?php if ($e instanceof FormaVida) echo $e->getDieta(); ?>
                </td>

                <td>
                    <?php if ($e instanceof MineralRaro) echo $e->getDureza(); ?>
                </td>

                <td>
                    <?php if ($e instanceof Artefacto) echo $e->getAntiguedad(); ?>
                </td>

                <td>
                    <a href="index.php?accion=modificacion&id=<?= $e->getId() ?>">Modificar</a> |
                    <a href="index.php?accion=eliminar&id=<?= $e->getId() ?>">Expulsar</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>

</body>
</html>
