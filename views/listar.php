<!DOCTYPE html>
<html>
<head>
    <title>Expediente Nova</title>
</head>
<body>
    <h1>Expediente Nova</h1>

    <a href="views/form.php">Agregar expediente</a>
    <br>
    <br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Planeta</th>
            <th>Estabilidad</th>
            <th>Tipo</th>
            <th>Reaccion</th>
            <th>Accion</th>
        </tr>

        <?php foreach ($entidades as $e): ?>
        <tr>
            <td><?= $e->getId() ?></td>
            <td><?= $e->getNombre() ?></td>
            <td><?= $e->getPlanetaOrigen() ?></td>
            <td><?= $e->getNivelEstabilidad() ?></td>
            <td><?
                if ($e instanceof FormaDeVida) {
                    echo $e->getDieta();
                } elseif ($e instanceof MineralRaro) {
                    echo $e->getDureza();
                } elseif ($e instanceof ArtefactoAntiguo) {
                    echo $e->getAntiguedad();
                } ?></td>
            <td>
                <a href="index.php?accion=editar&id=<?= $e->getId() ?>">Editar</a>
                |
                <a href="index.php?accion=eliminar&id=<?= $e->getId() ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>