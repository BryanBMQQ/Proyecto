<?php
class Conexion{
    private $host;
    private $bd;
    private $user;
    private $pass;
    private $port;

    private $cnx;
    
    public function Conexion(){
        $this->host = "localhost";
        $this->port = "3307";
        $this->bd = "proyectoubi";
        $this->user = "root";
        $this->pass = "root";

        //conexion por msqli
        $mysqli = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->host,
            $this->bd
        );

        if($mysqli->connect_error){
            echo"Error";
            $this->cnx = null;
        } 
    }
    function getCnx(){
        return $this->cnx;
    }
}

$conn = new Conexion();
var_dump($conn->getCnx);