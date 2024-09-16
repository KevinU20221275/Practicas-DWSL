<?php
class Database{
    private $host = "localhost";

    private $database = "dbtienda";

    private $user = "root";

    private $password = "";

    private $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->database,
                $this->user, 
                $this->password
            );

            $this->conn->exec("set names utf8");
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
            die();
        }
        return $this->conn;
    }
}

?>