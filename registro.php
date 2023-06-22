<?php
    include "Menu.php";
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 col-6">
        <form action="/modelo/Persona.php" method="post">
        <div class="card">
            <div class="card-header">
                <h2>Registro</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input required="true" type="text" name="nombre" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="papellido" class="form-label">primer apellido</label>
                    <input type="text" name="papellido" class="form-control"">
                </div>
                <div class="mb-3">
                    <label for="sapellido" class="form-label">Segundo Apellido</label>
                    <input type="text" name="sapellido" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="celular" class="form-label">Celular</label>
                    <input type="text" name="celular" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" name="direccion" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="fechanac" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" name="fechanac" class="form-control">
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