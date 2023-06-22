<?php
require "conexion/conexionBase.php";
$per = new Login();
$nick = htmlspecialchars($_POST["nick"]);
$pass = htmlspecialchars($_POST["pass"]);

if (empty($_POST["nick"])) {
    echo '<script>alert("existen campos vacios");</script>';
    header("Refresh: 0; URL=../index.php");
} else {
    $per->asignar("nick", $nick);
    $per->asignar("pass", $pass);
    $per->validar();
}
class Login
{
    private $nick;
    private $pass;
    private $con;

    function __construct()
    {
        $this->nick = "";
        $this->pass = "";
        $this->con = new conexionBase();
    }
    function asignar($nom, $valor)
    {
        $this->$nom = $valor;
    }
    //valida si la persona existe
    function validar()
    {
        $this->con->CreateConnection();
        $sql = "select *from usuario where nick='$this->nick' and pass='$this->pass'";
       
        $resp = $this->con->ExecuteQuery($sql);
        $re = $this->con->GetCountAffectedRows($resp);
        
        if ($re > 0) {
            echo '<script>alert(" Bienvenido El usuario existe");</script>';
            header("Refresh: 0; URL=../index.php");
        } else {
            echo '<script>alert("El usuario no existe");</script>';
            header("Refresh: 0; URL=../index.php");
        }
    }
}
