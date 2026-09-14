<?php

require_once __DIR__ . "/../../config/Database.php";

class categoriamodels {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getALL() {
        $sql = "SELECT * FROM categoria ORDER BY id_categoria";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id_categoria) {
        $sql = "SELECT * FROM categoria WHERE id_categoria = :id_categoria";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
}