<?php

namespace Mancheia\Model;

class Conta {
  public function Listar($conn) {
    $sql = 'SELECT * FROM accounts';
    foreach ($conn->query($sql) as $row) {
      print $row['name'] . "\t";
    }
  }
}
