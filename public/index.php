<?php
  require_once __DIR__ . "/../app/controllers/ClienteController.php";
  require_once __DIR__ . "/../app/controllers/productocontrollers.php";
  require_once __DIR__ . "/../app/controllers/ProveedorController.php";

  $clienteController = new ClienteController();
  $clienteController->index();

  $productoController = new productocontrollers();
  $productoController->index();

  $proveedorController = new ProveedorController();
  $proveedorController->index();