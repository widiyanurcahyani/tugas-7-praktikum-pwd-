<?php
class Database {
    private $host = "localhost";
    private $db_name = "pwd7";
    private $username = "root";
    private $password = "";
    public  $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4";
            $this->conn = new PDO($dsn, $this->username, $this->password,
                                  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch(PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
        return $this->conn;
    }
}