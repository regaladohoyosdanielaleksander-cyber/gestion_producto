<?php

require_once __DIR__ . "/../models/categoriamodels.php";

class categoriacontrollers {

    private $modelo;

    public function __construct() {
        $this->modelo = new categoriamodels();
    }

    public function index() {
        $categorias = $this->modelo->getALL();

        $categoria = $this->modelo->getById(2);

        require_once __DIR__ . "/../views/categoria/index.php";
    }
}