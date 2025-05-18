<?php
class Buku {
    private $conn;
    private $table = "buku";

    public function __construct($db) {
        $this->conn = $db;
    }

    // ambil semua buku
    public function all() {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} ORDER BY id_buku DESC");
        $stmt->execute();
        return $stmt;
    }
}