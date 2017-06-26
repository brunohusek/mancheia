<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php require_once __DIR__ . "/templates/header.php"; ?>
<title>Mancheia</title>
</head>
<body ng-app="Login">

<div ng-controller="pessoasCtrl">
  <h3>App PHP + AngularJS</h3>
  <div ng-repeat="pessoa in pessoas">
    <b>Matricula:</b> {{pessoa.matricula}} <br/>
    <b>Nome:</b> {{pessoa.nome}}
  </div>
  <button ng-click="adicionarMatricula()">Carregar</button>
</div>

<!-- Libs -->
<script src="app/exemplo_login.js"></script>

</body>
</html>
