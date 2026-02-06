<!DOCTYPE html>
<html>
<head>
    <title>Explorador de Entidades</title>
    <style>
    tr {
    background-color: black;
    color: #206111;
    }

    tr.alerta {
    background-color: red;
    color: black;
    }

        table {
            border-collapse: collapse;
        }
        th, td, tr {
            border: 1px solid white;
            padding: 5px 10px;
        }
        body{
            background-color: #001A33;
            font-family:sans-serif;
            color: #206111;
        }
        header{
            color: #206111;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido capitan</h1>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-------<strong>Iniciando</strong>-------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-<strong>Accediendo al archivo-</strong></p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <br><p>-----------------------</p>
        <h3>Entidades Cósmicas</h3>
    </header>
    <table>
        <th><a href="index.php?accion=registro">Registrar entidad</a><br><br><th>
    </table>
    <table>
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
    <?php if (!$e) continue; ?>
    
    <?php 
        $clase_alerta = ($e->getEstabilidad() < 3) ? 'alerta' : ''; 
    ?>
    <tr class="<?= $clase_alerta ?>">
        <td><?= $e->getId() ?></td>
        <td><?= $e->getNombre() ?></td>
        <td><?= $e->getPlaneta() ?></td>
        <td><?= $e->getEstabilidad() ?></td>
        <td><?= $e->getTipo() == "vida" ? $e->getDieta() : '' ?></td>
        <td><?= $e->getTipo() == "mineral" ? $e->getDureza() : '' ?></td>
        <td><?= $e->getTipo() == "artefacto" ? $e->getAntiguedad() : '' ?></td>
        <td><?= $e->reaccionar() ?></td>
        <td>
            <a href="index.php?accion=modificacion&id=<?= $e->getId() ?>">Modificar</a> |
            <a href="index.php?accion=expulsion&id=<?= $e->getId() ?>" onclick="return confirm('¿Seguro que quieres eliminar esta entidad?')">Expulsar</a>
        </td>
    </tr>
    <?php endforeach; ?>

    </table>

    <div style="margin-top:10px;">
        <?php if ($pagina_actual > 1): ?>
            <a href="index.php?pagina=<?= $pagina_actual-1 ?>">Anterior</a>
        <?php endif; ?>
        Página <?= $pagina_actual ?> de <?= $total_paginas ?>
        <?php if ($pagina_actual < $total_paginas): ?>
            <a href="index.php?pagina=<?= $pagina_actual+1 ?>">Siguiente</a>
        <?php endif; ?>
    </div>
            <br><br><br>
</body>
</html>

