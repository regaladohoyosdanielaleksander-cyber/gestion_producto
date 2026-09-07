<?php
require_once __DIR__ . "/../models/Cliente.php";

class ClienteController {
	public function index() {
		$modelo = new Cliente();
		$clientes = $modelo->getAll();

		require_once __DIR__ . "/../views/Cliente/index.php";
	}
}
