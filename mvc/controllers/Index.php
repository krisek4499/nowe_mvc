<?php
require_once 'conect.php';
class Index extends Controller{
    function __construct($params){
     parent::__construct();

     $this -> view -> controller = "Index";
     $this -> view -> page = "Show";
     require_once 'models/Index_model.php';
     $this -> model = new Index_model();

      print_r($params);
     // $action="Show";
     $action="news";
     if(isset($params[1])) $action = ucfirst($params[1]);
     $this -> date ="Today";
     if(isset($params[2])) $this -> date = ucfirst($params[2]);
     $this -> time ="AllDay";
     if(isset($params[3])) $this-> time = ucfirst($params[3]);
     $this -> $action($this -> date, $this -> time);
    }

    private function News($date, $time){
        $this -> view -> title = 'News!!! - ' . $date . ' : ' . $time . '<Br>';
        //echo 'News!!! - ' . $date . ' : ' . $time . '<Br>';
        $this -> view -> Calc =  $this -> model -> Calc(22,5) . '<Br>';
        //echo $this -> model -> Calc(22,5) . '<Br>';
        $this -> view -> Render();
    }
   /* if(isset($params[1])) $action = ucfirst($params[1]);
    $this -> id ="1";*/

    private function Show(){
        $user= new Model();
        $user = $user->getAll();
        $this -> view -> User = $user;
        //$this -> view -> Render();
        $this -> view -> Render($user);
        return $user;
        
    }

   
private function Photos(){

    }
}