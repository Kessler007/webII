<?php
    include "Menu.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/vista/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Roles</title>
</head>

<body>
    <table class="box">
        <h1>Roles</h1>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>
        <?php
        require "modelo/conexion/conexionBase.php";
        $con = new conexionBase();
        // Consulta a la base de datos las personas que existen
        $con->CreateConnection();
        $sql = "SELECT idrol,nombre FROM rol";
        $resultado = $con->ExecuteQuery($sql);
        // Mostrar los datos en la tabla personas
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila['idrol'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay datos</td></tr>";
        }
        ?>
    </table>
    <div class="container mt-2 col-5">
        <form action="/modelo/rol.php" method="post">
            <div class="card">
                <div class="card-header">
                    <h2 class=" text-center ">Registrar Rol</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="rol" class="form-label">Nombre del rol</label>
                        <input type="text" name="rol" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Registrarse</button>
                    <a class="btn btn-secondary" href="/index.php">volver</a>

                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>