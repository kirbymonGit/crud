<!DOCTYPE html>
<html>
<head>
    <title>Proyecto CRUD - Lista de empleados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <style>
        .btn-add {
            background-color: #3366ff;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Lista de empleados</h1>

    <!-- Botón de Agregar empleado -->
    <a href="crear.php" class="btn btn-add">Agregar empleado</a>

    <!-- Tabla con filas alternadas resaltadas -->
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Puesto</th>
            <th>Acciones</th>
        </tr>

        <?php
        

        // Obtener la conexión a la base de datos
        require_once 'connection.php';
       // $conexion = Database::getConnection();

        // Consulta para obtener la lista de empleados
        $consulta = "SELECT * FROM empleados";
        $resultado = mysqli_query($conexion, $consulta);

        // Mostrar los empleados en la tabla
        while ($empleado = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $empleado['id'] . "</td>";
            echo "<td>" . $empleado['nombre'] . "</td>";
            echo "<td>" . $empleado['edad'] . "</td>";
            echo "<td>" . $empleado['puesto'] . "</td>";
            echo "<td>";
            echo "<a href='editar.php?id=" . $empleado['id'] . "' class='btn btn-primary'>Editar</a> ";
            echo "<a href='borrar.php?id=" . $empleado['id'] . "' class='btn btn-danger'>Eliminar</a>";
            echo "</td>";
            echo "</tr>";
        }

        // Liberar recursos
        mysqli_free_result($resultado);
        mysqli_close($conexion);
        ?>
    </table>
</body>
</html>
