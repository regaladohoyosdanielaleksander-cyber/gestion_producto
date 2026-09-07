<?php
require_once __DIR__ . "/../models/Proveedor.php";

class ProveedorController {
    public function index() {
        $modelo = new Proveedor();
        $proveedores = $modelo->getAll();

        require_once __DIR__ . "/../views/proveedores/index.php";
    }
}