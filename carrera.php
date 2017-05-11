<?php

include 'db.php';
class carrera extends db{
  function __construct(){
    parent::__construct();
  }

//////INSERTAR UNA CARRERA//////
    function insertarCarrera($carrera, $fecha, $idusuario, $tiempo){
    $sql="INSERT INTO carrera (id, carrera, fecha, idusuario, tiempo) VALUES (NULL, '".$carrera."', '".$fecha."', '".$idusuario."', '".$tiempo."')";
    $insert=$this->insertarCarrera($sql);
    if ($insert=!false) {
      return true;
    }else {
      return false;
    }
}


/////FUNCION PARA LISTAR CARRERAS/////
   public function ListaCarrera(){
      $sql="SELECT * FROM carrera";
      $listacarrera=$this->realizarConsulta($sql);
      if ($listacarrera!=null) {
        $tablalista=[];
        while ($fila=$listacarrera->fetch_assoc()) {
          $tablalista[]=$fila;
        }
        return $tablalista;
      }else {
        return null;
      }
    }

}
  ?>
