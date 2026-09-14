<?php 
require_once __DIR__ . "/../models/productomodels.php";

class productocontrollers {

    public function index() {

        $modelo = new productomodels();

        $productos = $modelo->getALL();

        $producto = $modelo->getById("0 OR 1=1");

        require_once __DIR__ . "/../views/producto/index.php";
    }
}