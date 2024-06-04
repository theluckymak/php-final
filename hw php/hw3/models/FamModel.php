<?php

class FarmModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('sqlite:database/farm.db');
        $this->createTable(); // Create the farm table if it doesn't exist
    }

    private function createTable() {
        $query = "CREATE TABLE IF NOT EXISTS farm (
            id INTEGER PRIMARY KEY,
            name TEXT,
            location TEXT
        )";
        $this->db->exec($query);
    }

    public function getAll() {
        $query = "SELECT * FROM farm";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
