<!DOCTYPE html>
<html>
<head>
    <title>Crear Expediente</title>
</head>
<body>
    <h1>Crear Expediente</h1>

    <form action="../index.php?accion=guardar" method="POST">

        <label>Tipo de entidad:</label>
            <select name="tipo" required>
                <option value="Vida">Forma de Vida</option>
                <option value="Mineral">Mineral Raro</option>
                <option value="Artefacto">Artefacto Antiguo</option>
            </select>
        <br><br>

        Nombre:<br>
        <input type="text" name="nombre" required><br><br>

        Planeta de origen:<br>
        <input type="text" name="planetadeorigen" required><br><br>

        Nivel de Estabilidad (0-10):<br>
        <input type="number" name="nivelestabilidad" required><br><br>

        Dieta (solo si es forma de vida):<br>
        <input type="text" name="dieta" ><br><br>

        Dureza (solo si es mineral):<br>
        <input type="number" name="dureza" ><br><br>

        Antigüedad (solo si es artrfacto):<br>
        <input type="number" name="antigüedad" ><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="../index.php">Volver</a>
</body>
</html>
