var app = angular.module('app', []);

app.controller("ctlLogin", ["$scope", "$http", function($scope, $http) {

  $scope.Login = function() {
    var obj={};
    obj.postLogin = function() { return $http.post('/app/login.php', $scope.login); }
    obj.postLogin().then( function(data) {
        $scope.resposta = data.data.status+" "+data.data.message;
    } );
  };
}]);

app.run();
