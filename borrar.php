<?php
// Verificar si se envió el ID del empleado a eliminar
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    require_once 'connection.php';

       
    // Consulta para eliminar el empleado
    $consulta = "DELETE FROM empleados WHERE id = '$id'";
    $resultado = mysqli_query($conexion, $consulta);

    // Verificar si la consulta se ejecutó correctamente
    if ($resultado) {
        echo "Empleado eliminado correctamente.";
    } else {
        echo "Error al eliminar empleado: " . mysqli_error($conexion);
    }

// Redireccionar a index.php después de eliminar el empleado
    header("Location: index.php");
    exit(); // Detener la ejecución del script después de la redirección
} else {
    echo "ID de empleado no especificado.";
}
?>
