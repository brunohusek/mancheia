var app = angular.module('app', ['ui.router']);

app.config(['$stateProvider', function($stateProvider){
  $stateProvider.state('login', {
    url: '/login',
    template: '<strong>Testando login</strong>'
  });
}]);
