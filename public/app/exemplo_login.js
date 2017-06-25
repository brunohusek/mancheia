var app = angular.module('Login', []);

app.factory('services', ['$http', function($http) {
    var obj={};
    obj.getPessoas = function() { return $http.get('/app/exemplo_Logins.php'); }
    return obj;
}]);

app.controller("pessoasCtrl", function($scope, services) {
    services.getPessoas().then( function(data) {
        $scope.pessoas = data.data;
    } );
});

app.run();
