
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

<?php include 'helpers/paginador.php'; ?>