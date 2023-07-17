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
    public function saveToken($email,$remember_token) {
        return $this->remember($this->table,$email,$remember_token);
    }
    public function getUser($token) {
        return $this->getUserByToken($this->table,$token);
    }
}
?>