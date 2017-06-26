var app = angular.module('Login', []);

app.factory('services', ['$http', function($http) {
    var obj={};
    data = [{
            'matricula' : '4',
            'nome' : 'Priscilla Ballan'
        },{
                'matricula' : '5',
                'nome' : 'FULANO DE TAL'
            }];
    obj.getPessoas = function() { return $http.post('/app/exemplo_Logins.php', data); }
    return obj;
}]);

app.controller("pessoasCtrl", ["$scope", function($scope) {
  $scope.adicionarMatricula = function($scope, services) {
    services.getPessoas().then( function(data) {
        $scope.pessoas = data.data;
    } );
  };
}]);

/*
app.controller("pessoasCtrl", function($scope, services) {
  services.getPessoas().then( function(data) {
      $scope.pessoas = data.data;
  } );
});
*/

app.run();
