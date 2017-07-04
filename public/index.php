<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<?php require_once __DIR__ . "/templates/header.php"; ?>
<title>Mancheia</title>
</head>
<body ng-app="app">

<div class="col-md-4 col-md-offset-4" ng-controller="ctlLogin">
  <h2>Entrar</h2>
  <form name="formLogin">
    <div class="form-group" ng-class="{ 'has-error': formLogin.username.$dirty && formLogin.username.$error.email }">
      <input type="email" name="username" class="form-control" placeholder="Email" ng-model="login.username" required>
    </div>
    <div class="form-group" ng-class="{ 'has-error': formLogin.password.$dirty && formLogin.password.$error.required }">
      <input type="password" name="password" class="form-control" placeholder="Password" ng-model="login.password" required>
    </div>
    <button type="submit" class="btn btn-primary" ng-disabled="formLogin.$invalid" ng-click="Login()">Entrar</button>
  </form><br>
  {{resposta}}
</div>

<!-- Library -->
<script type="text/javascript" src="/app/login.js"></script>

</body>
</html>
