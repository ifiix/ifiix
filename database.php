<?php
class Database{
 
    // specify your own database credentials
    private $host = "	sql108.epizy.com";
    private $db_name = "epiz_22681180_users";
    private $username = "epiz_22681180";
    private $password = "akmQxfuIKXc";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>
