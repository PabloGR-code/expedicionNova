<!DOCTYPE html>
<html>
<head>
    <title>Editar Expediente</title>
</head>
<body>
    <h1>Editar Expediente</h1>

    <form method="POST">
        Nombre:<br>
        <input type="text" name="nombre" required><br><br>

        Planeta de origen:<br>
        <input type="text" name="planetadeorigen" required><br><br>

        Nivel de Estabilidad (0-10):<br>
        <input type="number" name="nivelestabilidad" required><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
