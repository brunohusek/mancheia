<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$username = $request->username;
$password = $request->password;

header('Content-Type: application/json');

// Load Classes
require_once __DIR__ . "/../../vendor/autoload.php";

$conn = new Mancheia\Core\Services\Database();
$conn = $conn->connect();

$login = new Mancheia\Core\Services\Login();
$return = $login->Login($conn,$username,$password);

echo '{"status": 404, "message": "'.$return.'"}';
