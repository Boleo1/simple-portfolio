<?php

class Database {
  private $dbh;
  private $stmt;

  public function __construct()
  {
      $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
      try {
          $this->dbh = new PDO($dsn, DB_USER, DB_PASS, [
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
          ]);
      } catch (PDOException $e) {
          exit('Database connection error: ' . $e->getMessage());
      }
  }

  public function query($sql) {
      $this->stmt = $this->dbh->prepare($sql);
  }

  public function bind($param, $value, $type = null) {
      if (is_null($type)) {
          switch (true) {
              case is_int($value):
                  $type = PDO::PARAM_INT;
                  break;
              case is_bool($value):
                  $type = PDO::PARAM_BOOL;
                  break;
              case is_null($value):
                  $type = PDO::PARAM_NULL;
                  break;
              default:
                  $type = PDO::PARAM_STR;
          }
      }
      $this->stmt->bindValue($param, $value, $type);
  }

  public function execute() {
      return $this->stmt->execute();
  }

  public function resultSet() {
      $this->execute();
      return $this->stmt->fetchAll();
  }

  public function single() {
      $this->execute();
      $result = $this->stmt->fetch();
      if (!$result){
        error_log("no data entry found for: " . $this->stmt->queryString);
      }
      return $result;
  }
}
