<!DOCTYPE html>
<link rel="stylesheet" href="css/estilos.css">
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
            <th>Detalle</th>
            <th>Reaccion</th>
            <th>Accion</th>
        </tr>

        <?php foreach ($entidades as $e): ?>
        <tr>
            <td><?= $e->getId() ?></td>
            <td><?= $e->getNombre() ?></td>
            <td><?= $e->getPlanetaOrigen() ?></td>
            <td><?= $e->getNivelEstabilidad() ?></td>
            <td>
            <?php
                if (get_class($e) === "FormaDeVida") {
                    echo "Forma de Vida";
                } elseif (get_class($e) === "MineralRaro") {
                    echo "Mineral Raro";
                } elseif (get_class($e) === "ArtefactoAntiguo") {
                    echo "Artefacto Antiguo";
                }
            ?>
            </td>
            <td>
            <?php
            if (get_class($e) === "FormaDeVida") {
                echo $e->getDieta();
            } elseif (get_class($e) === "MineralRaro") {
                echo $e->getDureza();
            } elseif (get_class($e) === "ArtefactoAntiguo") {
                echo $e->getAntiguedad();
            }
            ?>
            </td>
            <td><?=$e->reaccionar()?></td>
            <td>
                <a href="index.php?accion=editar&id=<?= $e->getId() ?>">Editar</a>
                |
                <a href="index.php?accion=eliminar&id=<?= $e->getId() ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
    <div class="paginador">

        <?php if ($paginaActual > 1): ?>
            <a href="index.php?pagina=<?= $paginaActual - 1 ?>">Anterior</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
            <a href="index.php?pagina=<?= $i ?>"
                class="<?= $i == $paginaActual ? 'activo' : '' ?>">
                <?= $i ?>
            </a>
        <?php endfor; ?>

        <?php if ($paginaActual < $totalPaginas): ?>
            <a href="index.php?pagina=<?= $paginaActual + 1 ?>">Siguiente</a>
        <?php endif; ?>

    </div>
</body>
</html>