<?php
class Claseconectar{
    public $conexion;
    protected$db;
    private $host = "localhost";
    private $usuario = "root";
    private $pass = "root";
    private $base = "sexto";

    public  function ProcedimientoParaConectar()
    {
        $this->conexion = mysqli_connect($this->host, $this->usua)
    }

};


?>