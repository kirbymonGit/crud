<?php

    require_once 'connection.php';

// Verificar si se enviaron los datos del empleado a actualizar
if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['puesto'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $puesto = $_POST['puesto'];


       
    // Consulta para actualizar los datos del empleado
    $consulta = "UPDATE empleados SET nombre = '$nombre', edad = '$edad', puesto = '$puesto' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    // Verificar si la consulta se ejecutó correctamente
    if ($resultado) {
        echo "Empleado actualizado correctamente.";
    } else {
        echo "Error al actualizar empleado: " . mysqli_error($conexion);
    }
// Redireccionar a index.php después de la actualización
    header("Location: index.php");
    exit(); // Detener la ejecución del script después de la redirección
} else {
    echo "Datos de empleado no especificados.";
}
?>
