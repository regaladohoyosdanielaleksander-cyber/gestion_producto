<?php
  require_once __DIR__ . "/../app/controllers/ClienteController.php";
  require_once __DIR__ . "/../app/controllers/productocontrollers.php";
  require_once __DIR__ . "/../app/controllers/ProveedorController.php";
  require_once __DIR__ . "/../app/controllers/categoriacontrollers.php";

  $clienteController = new ClienteController();
  $clienteController->index();

  $productoController = new productocontrollers();
  $productoController->index();

  $proveedorController = new ProveedorController();
  $proveedorController->index();

  $categoriaController = new categoriacontrollers();
  $categoriaController->index();