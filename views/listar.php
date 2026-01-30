<!DOCTYPE html>
<html>
<head>
    <title>Listado de Productos</title>
</head>
<body>
    <h1>Productos</h1>

    <a href="index.php?accion=crear">Agregar Producto</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>

        <?php foreach ($entidades as $e): ?>
        <tr>
            <td><?= $e->getId() ?></td>
            <td><?= $e->getNombre() ?></td>
            <td><?= $e->getPrecio() ?></td>
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