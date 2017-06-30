var app = angular.module('app', []);

app.controller("ctlLogin", ["$scope", "$http", function($scope, $http) {

  $scope.Login = function() {
    var obj={};
    console.log($scope.login);
    obj.postLogin = function() { return $http.post('/app/exemplo_Logins.php', $scope.login); }
    obj.postLogin().then( function(data) {
        $scope.resposta = "Tentando logar.";
    } );
  };
}]);

app.run();
