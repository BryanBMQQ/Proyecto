<?php
    class CnxPDO {
       private $cnx;
       function CnxPDO(){
           $cadena = HOSTGESTOR . ':host=' . HOST. ';dbname=' . HOSTBD. ';port=' . HOSTPORT;
           try {
              $this->cnx = new PDO($cadena, HOSTUSER, HOSTPASS);
            
         } catch(PDOException $e){
           var_dump($e);
            $msg = array(msg=> "Error al conectarse");
            echo json_encode($msg);
        }
                
    }
    function getCnx(){
      return $this->cnx;
    }
}

