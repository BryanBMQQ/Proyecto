<?php
include_once('cnxPDO.php');
     class Usuario {
         private $nombre;
         private $username;
         private $password;

         function Usuario(){
             $this->nombre = "";
             $this->username = "";
             $this->password = "";
             
            
         }
         function setnombre($nombre){
             $this->nombre = $nombre;
         }
         function setusername($username){
            $this->username = $username;
        }
        function setpassword($password){
            $this->password = $password;
        }
        function getnombre(){
            return $this->nombre;
        }
        function getusername(){
            return $this->username;
        }
        function getpassword(){
            return $this->password;
        }
        function obtUsuario(){
            echo "Lista usuarios...";
            $c = new CnxPDO();
            $q ="SELECT id_usuario, nombre, username, password FROM usuario";
            echo $_POST;
            $consulta = $c->getCnx()->prepare($q);
            $consulta->execute();
            var_dump($consulta);

            $resultado = $consulta->fetchALL(PDO::FETCH_OBJ);
            echo json_encode($resultado);
        }   
        function inUsuario(){
          $q = 'INSERT INTO usuario (nombre, username, password) values (:nombre, :username, MD5(:password));';
          try{
              echo $_POST['nombre'].'...';
          $c = new CnxPDO();
          $consulta =$c->getCnx()->prepare($q);
         
          $consulta->bindParam(':nombre',$_POST['nombre'],PDO::PARAM_STR);
          $consulta->bindParam(':username',$_POST['username'],PDO::PARAM_STR);
          $consulta->bindParam(':password',$_POST['password'],PDO::PARAM_STR);
          var_dump($consulta);
          $consulta->execute();

          $msg = array(data => $c->getCnx()->lastInsertId());
          echo json_encode($msg);  
        }
        catch(PDOException $e){
            $msg = array(msg=>"Error al ejecutar INSERT");
            echo json_encode($msg);

        }
               
        }
        function actUsuario(){
            echo "Actualizar usuarios...";
        }
        function modUsuario(){
            echo "Modificar usuarios...";
        }
        function elimUsuario(){
            echo "Eliminar usuarios...";
        }
     }