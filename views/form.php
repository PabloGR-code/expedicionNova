<!DOCTYPE html>
<html>
<head>
    <title>Crear Expediente</title>
</head>
<body>
    <h1>Crear Expediente</h1>

    <form method="POST">
        Nombre:<br>
        <input type="text" name="nombre" required><br><br>

        Planeta de origen:<br>
        <input type="text" name="planetadeorigen" required><br><br>

        Nivel de Estabilidad (0-10):<br>
        <input type="number" name="nivel de estabilidad" required><br><br>

        Dieta (solo si es forma de vida):<br>
        <input type="text" name="nivel de estabilidad" required><br><br>

        Dureza (solo si es mineral):<br>
        <input type="number" name="nivel de estabilidad" required><br><br>

        Antigüedad (solo si es artrfacto):<br>
        <input type="number" name="nivel de estabilidad" required><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
