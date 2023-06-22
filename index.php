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
        <form action="modelo/login.php" method="post">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h2>Inicio de sesion</h2>
                    </center>
                </div>
                <div class="card-body">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nick"placeholder="usuario">
                        <label for="floatingInput">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control"name="pass" placeholder="Password">
                        <label for="pass">Password</label>
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Iniciar Sesion</button>
                    <a class="btn btn-secondary" href="/registro.php">Registrarse</a>
                </div>
            </div>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>