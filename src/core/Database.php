<?php

define('DB_USER', $config['database']['user']);
define('DB_PASS', $config['database']['password']);
define('DB_HOST', $config['database']['host']);
define('DB_NAME', $config['database']['name']);

class Database {
  private $pdo;

  public function __construct() {
      $this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function query($sql) {
      return $this->pdo->query($sql);
  }
}