<!DOCTYPE html>
<html ng-app="Login" lang="pt-br">
<head>
<?php require_once __DIR__ . "/templates/header.php"; ?>
<title>Mancheia</title>
</head>
<body>

<div ng-controller="pessoasCtrl">
  <h3>App PHP + AngularJS</h3>
  <div ng-repeat="pessoa in pessoas">
    <b>Matricula:</b> {{pessoa.matricula}} <br/>
    <b>Nome:</b> {{pessoa.nome}}
  </div>
</div>

<!-- Libs -->
<script src="app/exemplo_login.js"></script>

</body>
</html>
