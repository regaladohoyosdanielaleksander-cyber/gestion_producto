<?php

require_once __DIR__ . "/../../config/Database.php";

class productomodels {

    private $connection;

    public function __construct() { 
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getALL() {

        $sql = "SELECT p.id, p.nombre, p.precio, p.stock, p.id_proveedor,
                       pr.nombre AS nombre_proveedor
                FROM producto p
                INNER JOIN proveedores pr ON p.id_proveedor = pr.id_proveedor
                ORDER BY p.id";

        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {

        $sql = "SELECT p.id, p.nombre, p.precio, p.stock, p.id_proveedor,
                       pr.nombre AS nombre_proveedor
                FROM producto p
                INNER JOIN proveedores pr ON p.id_proveedor = pr.id_proveedor
                WHERE p.id = :id";

        $consulta = $this->connection->prepare($sql);

        $consulta->bindParam(':id', $id, PDO::PARAM_INT);

        $consulta->execute();

        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }
}