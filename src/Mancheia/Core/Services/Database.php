<?php

try {
  $conn = new PDO('mysql:dbname=mancheia;host=127.0.0.1', 'root', 'my$SQL#3214');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo 'Erro ao conectar: ' . $e->getMessage();
}
