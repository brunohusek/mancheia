<?php require 'templates/header.php'; ?>

<h1>Olá, mundo!</h1>

<div>
  <label>Name:</label>
  <input type="text" ng-model="yourName" placeholder="Enter a name here">
  <hr>
  <h1>Hello {{yourName}}!</h1>
</div>

<?php require 'templates/footer.php'; ?>
