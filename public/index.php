<!DOCTYPE html>
<html ng-app lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/angular.min.js"></script>
    <script src="/js/jquery-1.12.4.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <title>Mancheia</title>
  </head>
  <body>
    <h1>Olá, mundo!</h1>

    <div>
      <label>Name:</label>
      <input type="text" ng-model="yourName" placeholder="Enter a name here">
      <hr>
      <h1>Hello {{yourName}}!</h1>
    </div>
  </body>
</html>
