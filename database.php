<?php
class Database {
    private $host = "localhost";
    private $database_name = "web_server";
    private $username = "dimas789";
    private $password = "c0b4d1b4c4";
    public $conn;
    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password
            );
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Database could not be connected: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>