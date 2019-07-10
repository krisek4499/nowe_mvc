<?php
 
 require_once 'conect.php';
class Model{
   function __construct(){}
  
    public function getAll()
     {
         $instance=connect_DB::getInstance();
         $q = 'SELECT id,imie,nazwisko,zawod,nr_telefonu,data_ur,email FROM testowa ORDER BY id DESC LIMIT 1';
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

     public function getBy($id)
     {
         $instance=connect_DB::getInstance();
         $ID=$id;
         $q = "SELECT id,imie,nazwisko,zawod,nr_telefonu,data_ur,email FROM testowa Where id='$ID'";
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
  
   }



      