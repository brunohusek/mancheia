<?php

namespace Mancheia\Core\Services;

class Database {

  private $conn;

  function connect() {
    try {
      $this->conn = new \PDO('mysql:dbname=mancheia;host=127.0.0.1', 'root', 'my$QL#3214');
      $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      return $this->conn;
    } catch(\PDOException $e) {
      echo 'Erro ao conectar: ' . $e->getMessage();
    }
  }

}
