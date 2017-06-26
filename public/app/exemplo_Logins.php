<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$matricula = $request[0]->matricula;
$nome = $request[0]->nome;
$matricula2 = $request[1]->matricula;
$nome2 = $request[1]->nome;

header('Content-Type: application/json');

echo '[ {"matricula": "1", "nome": "RAFAEL CAMPOS PIMENTEL"},';
echo '{"matricula": "2", "nome": "BRUNO HUSEK"},';
echo '{"matricula": "3", "nome": "PRISCILLA BALLAN"},';
echo '{"matricula": "'.$matricula.'", "nome": "'.$nome.'"},';
echo '{"matricula": "'.$matricula2.'", "nome": "'.$nome2.'"}]';
