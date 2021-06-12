<?php
  include_once('./../config/parametros.php');
    class CnxPDO {
       private $cnx;
       function CnxPDO(){
           $cadena = HOSTGESTOR . ':host=' . HOST. ';dbname=' . HOSTBD. ';port=' . HOSTPORT;
           try {
              $this->cnx = new PDO($cadena, HOSTUSER, HOSTPASS);
              echo "conectado";
         } catch(PDOException $e){
            $msg = array(msg=> "Error al conectarse");
            echo json_encode($msg);
        }
                
    }
}

