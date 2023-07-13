<?php
    class Connection{
        private $severname = "localhost:3306";
        private $username = "root";
        private $password = "123456";
        private $dbname ="article_db";
        public function connect(){
            $conn = new mysqli($this->severname,$this->username,$this->password,$this->dbname);
            if($conn->connect_errno){
                echo "Lỗi kết nối DB:".$conn->connect_errno."-".$conn->connect_error;
            }
            return $conn;
        }
    }
?>