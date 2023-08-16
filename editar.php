<!DOCTYPE html>
<html>
<head>
    <title>Proyecto CRUD - Editar empleado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="ruta/a/tu/estilo-personalizado.css">

</head>
<body>
    <h1>Editar empleado</h1>

    <?php
        // Obtener la conexión a la base de datos
        require_once 'connection.php';
      //  $conexion = Database::getConnection();
   
    // Verificar si se envió el ID del empleado a editar
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

     //echo $id;
        
        

        // Consulta para obtener los datos del empleado a editar
    $consulta = "SELECT * FROM empleados WHERE id = $id";
    $resultado = mysqli_query($conexion, $consulta);
    $empleado = mysqli_fetch_assoc($resultado);

         // Mostrar el formulario con los datos del empleado
    if ($empleado) {
      //  if ($resultado){
            ?>
            <form action="actualizar.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $empleado['id']; ?>">

                <label>Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $empleado['nombre']; ?>" required><br>

                <label>Edad:</label>
                <input type="number" name="edad" value="<?php echo $empleado['edad']; ?>" required><br>

                <label>Puesto:</label>
                <input type="text" name="puesto" value="<?php echo $empleado['puesto']; ?>" required><br>

                <input type="submit" value="Guardar cambios">
            </form>
            <?php
         } else {
        echo "Empleado no encontrado.";
    }

        // Liberar recursos
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    } else {
    echo "ID de empleado no especificado.";
}
?>
</body>
</html>
