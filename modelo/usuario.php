<?php
require "conexion/conexionBase.php";
$per = new Usuario();

$nick = htmlspecialchars($_POST["nick"]);
$pass = htmlspecialchars($_POST["pass1"]);
$idRol = htmlspecialchars($_POST["idrol"]);
$idPersona = htmlspecialchars($_POST["idpersona"]);
if (empty($_POST["nick"])) {
    echo '<script>alert("existen campos vacios");</script>';
    header("Refresh: 0; URL=../signup.php");
} else {
    $per->asignar("nick", $nick);
    $per->asignar("pass", $pass);
    $per->setidRol($idRol);
    $per->setIdPersona($idPersona);
    $per->validar();
}
class Usuario
{
    private $nick;
    private $pass;
    private $activo;
    private $idRol;
    private $idPersona;
    private $con;

    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;
    }

    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;
    }

    function __construct()
    {
        $this->nick = "";
        $this->pass = "";
        $this->activo = 1;
        $this->idRol = null;
        $this->idPersona = null;
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
        $sql = "select * from usuario where nick='$this->nick' and rol_idrol='$this->idRol'";
        $resp = $this->con->ExecuteQuery($sql);
        $re = $this->con->GetCountAffectedRows($resp);
        if ($re > 0) {
            echo '<script>alert("El nombre de usuario ya esta en uso usa otro y rol");</script>';
            header("Refresh: 0; URL=../usuario.php");
        } else {
            $this->registrarUsuario();
        }
    }
    //registrar a la persona
    function registrarUsuario()
    {
        // $password_segura = password_hash($this->pass, PASSWORD_BCRYPT, ['cost' => 4]);
        $token = password_hash($this->pass, PASSWORD_BCRYPT, ['cost' => 4]);
        $this->con->CreateConnection();
        $sql = "insert into usuario (nick,pass,activo,token,rol_idrol,persona_idpersona) values ('$this->nick','$this->pass',$this->activo,'$token',$this->idRol,$this->idPersona)";
        // echo $sql;
        // die();
        $resp = $this->con->ExecuteQuery($sql);

        if ($resp) {
            echo '<script>alert("El usuario se creo correctamente");</script>';
            header("Refresh: 0; URL=../usuarios.php");
        } else {
            echo '<script>alert("El usuario no se creo correctamente");</script>';
            header("Refresh: 0; URL=../usuarios.php");
        }
    }
}
