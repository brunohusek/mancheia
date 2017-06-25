<?php

// Load Classes
require_once __DIR__ . "/../vendor/autoload.php";

$conn = new Mancheia\Core\Services\Database();
$conn = $conn->connect();

$contas = new Mancheia\Model\Conta();
$contas->Listar($conn);
