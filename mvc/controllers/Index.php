<?php
require_once 'conect.php';
class Index extends Controller{
    function __construct($params){
     parent::__construct();

     $this -> view -> controller = "Index";
     $this -> view -> page = $params[1];
     require_once 'models/Index_model.php';
     $this -> model = new Index_model();

      //print_r($params);
  
     $action=$params;
     if(isset($params[1])) $action = ucfirst($params[1]);

     $this -> news =$params[1];
     if(isset($params[2])) $this -> date = ucfirst($params[2]);
     $this -> user ="formularz";
     if(isset($params[3])) $this-> time = ucfirst($params[3]);
     $this -> $action($this -> news, $this -> user);
    }

    private function News($news, $user){
   
        $this -> view -> Render($news,$user);
    }
  

    private function Show(){
        $user= new Model();
        $user = $user->getAll();
        $this -> view -> User = $user;
        $this -> view -> Render($show,$user);
        return $user;
        
    }

    private function Store(){
       
        $imie=$_POST["imie"];

        $nazwisko=$_POST["nazwisko"];

        $zawod=$_POST["zawod"]; 
       
        $nr_telefonu=$_POST["numer"]; 
       
        $data_ur=$_POST["urodziny"];
       
        $email=$_POST["email"];

        $tab[0]=$imie;
        $tab[1]=$nazwisko;
        $tab[2]=$zawod;
        $tab[3]=$nr_telefonu;
        $tab[4]=$data_ur;
        $tab[5]=$email;
        $zm= new Index_model();
        $foo=$zm -> Valid($tab);
        //echo $foo;
        if($foo=="Poprawnie wypełniony formularz"){
          $instance=connect_DB::getInstance();
          $query="INSERT INTO testowa values ('','$imie','$nazwisko','$zawod','$nr_telefonu','$data_ur','$email')";
          $stm = $instance->prepare($query);
          $stm->execute();
          $store="store";
 
          $user= new Model();
          $user = $user->getAll();
         

           $this -> view -> Render($store,$user);
        }
           else{
               $user=$foo;
               $store="store";
            $this -> view -> Render($store,$user);
           }
    }

    private function Delete(){
       
        $value=$_POST["id"];
        $user= new Model();
        $user = $user->getBy($value);
        $instance=connect_DB::getInstance();
        $q = "SELECT imie FROM testowa WHERE id='$value'";
        $data = $instance->query($q);
        $row = $data->fetch();
        $user=$row['imie'];

        //$instance=connect_DB::getInstance();
        $query="DELETE FROM testowa  WHERE id= '$value'";
          $stm = $instance->prepare($query);
          $stm->execute();
        $delete="delete";

        $this -> view -> Render($delete,$user);
    }

    private function Edit(){
       
        $value=$_POST["id"];
        $user= new Model();
        $user = $user->getAll($value);
        $edit="edit";

        $this -> view -> Render($edit,$user);
    }
    private function Update(){
       
        $id=$_POST["id"];
        $imie=$_POST["imie"];
        $nazwisko=$_POST["nazwisko"];
        $zawod=$_POST["zawod"];
        $nr_telefonu=$_POST["nr_telefonu"];
        $data_ur=$_POST["data_ur"];
        $email=$_POST["email"];

        $instance=connect_DB::getInstance();
        $query="UPDATE testowa SET imie='$imie', nazwisko='$nazwisko',zawod='$zawod',nr_telefonu='$nr_telefonu',data_ur='$data_ur' ,email='$email' WHERE id='$id'";
        $stm = $instance->prepare($query);
        $stm->execute();

        $user= new Model();
        $user = $user->getAll($id);
      
        $update="update";
        $this -> view -> Render($update,$user);
    }
}