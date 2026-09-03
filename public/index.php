<?php
  require_once __DIR__ . "/../app/controllers/productocontrollers.php";

   $productoController = new productocontrollers();
   $productoController->index();