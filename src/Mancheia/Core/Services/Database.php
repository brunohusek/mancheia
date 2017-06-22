<?php

namespace Mancheia\Core\Services;

class Database
{
  public function __construct()
  {
    try {
    	$conn = new PDO("dblib:host=127.0.0.1;DATABASE=mancheia", 'root', 'my$QL#3214');
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
    	echo 'Erro ao conectar: ' . $e->getMessage();
    }
  }
}
