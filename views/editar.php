<!DOCTYPE html>
<html>
<head>
    <title>Editar Entidad</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>


    <div class="contenedor-form">
        <div class="panel">
            <h1>Editar Entidad</h1>
            <form method="POST">
                 <input type="text" name="Id" readonly
                        value="<?= $entidad->getId() ?>" required>

                <label>Nombre:</label>
                <input type="text" name="Nombre"
                       value="<?= $entidad->getNombre() ?>" required>

                <label>Planeta de Origen:</label>
                <input type="text" name="PlanetaOrigen"
                       value="<?= $entidad->getPlanetaOrigen() ?>" required>

                <label>Nivel de Estabilidad:</label>
                <input type="number" name="NivelEstabilidad"
                       min="1" max="10"
                       value="<?= $entidad->getNivelEstabilidad() ?>" required>

                <label>Extra:</label>
                <input type="text" name="Detalle"
                       value="<?=
                       get_class($entidad) === 'FormaDeVida' ? $entidad->getDieta() :
                       (get_class($entidad) === 'MineralRaro' ? $entidad->getDureza() :
                       (get_class($entidad) === 'ArtefactoAntiguo' ? $entidad->getAntiguedad() : ''))
                       ?>">

                <button type="submit">Actualizar</button>
                <a href="index.php">Volver</a>  
            </form>
        </div>
    </div>

</body>
</html>
