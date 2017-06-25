<!DOCTYPE html>
<html ng-app lang="pt-br">
<head>
<?php require_once __DIR__ . "/templates/header.php"; ?>
<title>Mancheia</title>
</head>
<body>

<div class="col-md-4 col-md-offset-4">
<h2>Entrar</h2>
<form name="login" role="form">
  <div class="form-group" ng-class="{ 'has-error': login.username.$dirty && (login.username.$error.required || login.username.$error.email)}">
    <label for="username">Email</label>
    <input type="email" name="username" id="username" class="form-control" ng-model="email.text" required />
    <span ng-show="login.username.$dirty && (login.username.$error.required || login.username.$error.email)" class="help-block">Utilize um email válido</span>
  </div>
  <div class="form-group" ng-class="{ 'has-error': login.password.$dirty && login.password.$error.required }">
    <label for="password">Senha</label>
    <input type="password" name="password" id="password" class="form-control" ng-model="password" required />
    <span ng-show="login.password.$dirty && login.password.$error.required" class="help-block">Preencha a senha</span>
  </div>
  <div class="form-actions">
    <button type="submit" ng-disabled="login.$invalid" class="btn btn-primary">Entrar</button>
  </div>
</form>
</div>

</body>
</html>
