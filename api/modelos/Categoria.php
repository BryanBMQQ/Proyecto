<?php
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
        }
        function inUsuario(){
            echo "Inserta usuarios...";
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