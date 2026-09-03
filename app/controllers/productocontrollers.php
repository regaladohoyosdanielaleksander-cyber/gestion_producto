<?php 
  require_once __DIR__ . "/../models/productomodels.php";

  class productocontrollers {
    public function index() {
        $modelo = new productomodels();
        $productos = $modelo->getALL();

        require_once __DIR__ . "/../../views/producto/index.php";
    }
  }
    