<?php
require_once __DIR__ . "/../../config/Database.php";

class productomodels {
    private $connection;

    public function __construct() { 
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getALL() {
        $sql = "SELECT id, nombre, precio, stock FROM producto";
 
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll();
    }

}