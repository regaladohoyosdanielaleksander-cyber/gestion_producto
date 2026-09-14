<?php
require_once __DIR__ . "/../../config/database.php";

class Cliente {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll() {
        $sql = "SELECT * FROM cliente";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}