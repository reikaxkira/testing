var app = angular.module('myApp', []);
app.controller('loginController', function() {
  console.log('asd');
});

var myApp = angular.module('myApptest')
myApp.config(function ($routeProvider) {    
  $routeProvider    
    .when('/weather', {
      templateUrl: '/weather',
      controller: 'coordinatesController'
    })    
});