<?php
// Verificar si se enviaron los datos del empleado a crear
if (isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['puesto'])) {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $puesto = $_POST['puesto'];

    

    // Obtener la conexión a la base de datos
    require_once 'connection.php';
   // $conexion = Database::getConnection();

    // Consulta para insertar un nuevo empleado  
        $consulta = "INSERT INTO empleados (nombre, edad, puesto) VALUES ('$nombre', $edad, '$puesto')";
    
    $resultado = mysqli_query($conexion, $consulta);

    // Verificar si la consulta se ejecutó correctamente
    if ($resultado) {
        // Redireccionar a index.php
      
        header("Location: index.php");
        exit(); // Detener la ejecución del script después de la redirección
    } else {
        echo "Error al agregar empleado: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    echo "Datos de empleado no especificados.";
}
?>
