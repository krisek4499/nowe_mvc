<?php


class View{
   protected $data = [];

    function __construct(){
   //$this -> data = $data;
       }
       public function Render($tab){

          // echo $this -> controller;
         $User=$tab;
         // require_once 'views/Header.php';
          require_once 'views/Index/show.php';

          //require_once 'views/' . $this -> controller . '/' . $this -> page . '.php';
          $plik="";
          if (isset($this -> controller)&&isset($this -> page))
          $plik = 'views/' . $this -> controller . '/' . $this -> page . '.php';
           if(file_exists($plik)){
            require_once $plik;
              }
               else{
                   $this -> message = "Nie znaleziono pliku!";
                require_once 'views/Error.php';
                   }
       }
}