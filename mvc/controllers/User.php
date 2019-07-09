<?php
class User extends Controller{
    function __construct($params){
     parent::__construct();
     $this -> view -> controller = "User";
     $this -> view -> Render();
    }
}