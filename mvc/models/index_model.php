<?php
require_once 'conect.php';
class Index_model extends Model {
    protected $table = 'testowa';
    public function __construct(){
       parent::__construct();
    }
    
      public function Calc($a = 3, $b = 4){
      return $a + $b;}
      public function Calco(){$user= new Model();
        $user = $user->getAll();
    return $user;
    }
     

}