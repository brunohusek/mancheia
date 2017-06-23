<?php
// Load MySQL Database
require_once __DIR__ . "/../src/Mancheia/Core/Services/Database.php";
// Load Classes
require_once __DIR__ . "/../vendor/autoload.php";

// Load the header file
require_once __DIR__ . "/templates/header.php";
?>

<div class="col-md-4 col-md-offset-4">
<h2>Entrar</h2>
<form name="login" role="form">
  <div class="form-group" ng-class="{ 'has-error': login.email.$dirty && login.email.$error.required }">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control" ng-model="vm.email" required />
    <span ng-show="login.email.$dirty && login.email.$error.required" class="help-block">Preencha o email</span>
  </div>
  <div class="form-group" ng-class="{ 'has-error': login.password.$dirty && login.password.$error.required }">
    <label for="password">Senha</label>
    <input type="password" name="password" id="password" class="form-control" ng-model="vm.password" required />
    <span ng-show="login.password.$dirty && login.password.$error.required" class="help-block">Preencha a senha</span>
  </div>
  <div class="form-actions">
    <button type="submit" ng-disabled="login.$invalid || vm.dataLoading" class="btn btn-primary">Login</button>
  </div>
</form>
</div>

<?php
// Load the footer file
require_once __DIR__ . "/templates/footer.php";
?>
