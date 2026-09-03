<?php
class Database {
    private $conection;
    private $host;
    private $db_name;
    private $username;
    private $password;
    private $port;

    public function __construct() {
      $env = parse_ini_file(__DIR__ . '/../.env') ?: [];
      $this->host = $env['DB_HOST'] ?? '127.0.0.1';
      $this->port = $env['DB_PORT'] ?? '3306';
      $this->db_name = $env['DB_NAME'] ?? 'gestion_productos';
      $this->username = $env['DB_USER'] ?? 'root';
      $this->password = $env['DB_PASS'] ?? '';
    
    }

      public function conectar() {
        $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->db_name}";
        $this->conection = new PDO($dsn, $this->username, $this->password);
        return $this->conection;
        
      }
      
}