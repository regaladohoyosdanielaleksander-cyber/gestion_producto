<?php
require_once __DIR__ . "/../../config/Database.php";

class Proveedor {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll() {
        $sql = "SELECT id_proveedor, nombre, ciudad, direccion
                FROM proveedores
                ORDER BY id_proveedor";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
