<!DOCTYPE html>
<html>
<head>
    <title>Proyecto CRUD - Crear empleado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="ruta/a/tu/estilo-personalizado.css">
</head>
<body>
    <h1>Agregar empleado</h1>

    <form action="guardar.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Edad:</label>
        <input type="number" name="edad" required><br>

        <label>Puesto:</label>
        <input type="text" name="puesto" required><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
