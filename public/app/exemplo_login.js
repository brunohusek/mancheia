var app = angular.module('Login', []);

app.controller("pessoasCtrl", ["$scope", "$http", function($scope, $http) {
  $scope.adicionarMatricula = function() {
    var obj={};
    var data = [{
            'matricula' : '4',
            'nome' : 'Priscilla Ballan'
        },{
                'matricula' : '5',
                'nome' : 'FULANO DE TAL'
            }];
    obj.getPessoas = function() { return $http.post('/app/exemplo_Logins.php', data); }
    obj.getPessoas().then( function(data) {
        $scope.pessoas = data.data;
    } );
  };
}]);

app.run();
