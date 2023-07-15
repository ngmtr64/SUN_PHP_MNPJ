<?php
require_once "models/Query.php";
class User extends Query
{
    public $table = 'users';
    
    public function store($data){
        return $this->insert($this->table,$data);
    }
    public function checkLogin($email){
        return $this->login($this->table,$email);
    }
}
?>