<?php
 
 require_once 'conect.php';
class Model{
   function __construct(){}
  
    public function getAll()
     {
         $instance=connect_DB::getInstance();
         $q = 'SELECT imie,nazwisko,zawod,nr_telefonu,data_ur,email FROM testowa where id=1';
         $stm = $instance->prepare($q);
         $stm->execute();
         $data = $stm->fetchAll(PDO::FETCH_OBJ);
      
        // print_r($data);
         print_r($data[0]->imie);
         if ($data) {
             return $data;
         }
         return null;
     }
   /*  public function getBy($field, $values)
     {
         $this->connect();
         $q = "SELECT * FROM {$this->table}";
         $q .= " WHERE {$field} = {$values}";
         $stm = $this->pdo->prepare($q);
         $stm->execute();
         $data = $stm->fetchAll(PDO::FETCH_OBJ);
         if ($data) {
             return $data;
         }
         return null;
     }*/
   }



      