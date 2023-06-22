<?php
require "conexion/conexionBase.php";
$per = new Rol();
$rol = htmlspecialchars($_POST["rol"]);

if (empty($_POST["rol"])) {
    echo '<script>alert("El campo esta vacio");</script>';
    header("Refresh: 0; URL=../roles.php");
} else {
    $per->asignar("rol", $rol);
    $per->validarrol();
}
class Rol
{
    private $rol;
    private $con;

    function __construct()
    {
        $this->rol = "";
        $this->con = new conexionBase();
    }
    function asignar($nom, $valor)
    {
        $this->$nom = $valor;
    }
    //valida si la persona existe
    function validarrol()
    {
        $this->con->CreateConnection();
        $sql = "select * from rol where nombre='$this->rol'";
        $resp = $this->con->ExecuteQuery($sql);
        $re = $this->con->GetCountAffectedRows($resp);
        if ($re > 0) {
            echo '<script>alert("El rol ya esta registrado intenta con otro nombre");</script>';
            header("Refresh: 0; URL=../roles.php");
        } else {
            $this->registrarRol();
        }
    }
    //registrar a la persona
    function registrarRol()
    {

        $this->con->CreateConnection();
        $sql = "insert into rol(nombre) values ('$this->rol')";
    
        $resp = $this->con->ExecuteQuery($sql);
        if ($resp) {
            echo '<script>alert("El rol registrado");</script>';
            header("Refresh: 0; URL=../roles.php");
        } else {
            echo '<script>alert("El rol nose pudo ser registrado");</script>';
            header("Refresh: 0; URL=../roles.php");
        }
    }
}
