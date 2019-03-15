var myApp = angular.module('myApp', []);
myApp.controller("loginController", function ($scope, $http, $log) 
{
   $scope.onclicksuccess = function() 
     {
        $log.log('Hello World!');
     }

    $scope.doLogin = function() {
     var login = { 'email': $scope.login.email, 'password': $scope.login.password } 
       $http({
        method: 'POST',
        url: window.login.routeslogin}).then(function successCallback(response) {
             
        }, function errorCallback(response) {

        });
  
    //    console.log($scope.login);
     
    //   $http({ 
    //     method:  'POST',
    //     url: window.login.routeslogin,
    //  }).then(function(){
    //     console.log($scope.login);
    //  }) 
       


    }

});

// var app = angular.module('employeeRecords', []);

// (function (app) {
//     "use strict";
//     app.controller("EmployeesController", function ($scope, $http) {

//         $http({
//             method: 'GET',
//             url: '/employees'
//         }).then(function (employees){

//             $scope.employees = employees['data'];
//         },function (error){
//             console.log(error);
//         });

//         $scope.remaining = function () {
//             var count = 0;
//             angular.forEach($scope.employees, function (employee) {
//                 count += employee.done ? 0 : 1;
//             });
//         }
//     });
// })(app);

//   var onSuccess = function (data, status, headers, config) {
//     $scope.data = data;
// };
//   var getReq = {
//     method: 'GET',
//     url: window.login.routeslogin
// };

// $http(getReq).success(onSuccess).error(onError);

// var postReq = {
//     method: 'POST',
//     url: window.login.routeslogin,
//     data: { myData: 'test data' }
// };

// $http(postReq).success(onSuccess).error(onError);


// $http.post(window.login.routeslogin,
//   { myData: 'test data'}
// ).success(function(data) {
//   console.log('data =>', data);
// });



    // doLogin: function(loginForm) { 
    //   myApp.$http({ 
    //     headers: { 
    //       'Content-Type': 'application/json'
    //     },
    //     url: baseURL + 'auth',
    //     method: "POST",
    //     data: { 
    //         email: $scope.login.email,
    //         passsword: $scope.login.password
    //     }
    // }).success(function(response) { 
    //       console.log(response);
            
   


 



// var myApp = angular.module('myApp', []);
// myApp.controller('loginController',['$scope',function($scope) { 
//    angular.extend($scope,{
//       doLogin: function(loginForm) { 
//         myApp.$http({
//              headers: { 
//                'Content-Type': 'application/json'
//              },
//              url: baseURL + 'auth',
//              method: "POST",
//              data: { 
//                  email: $scope.login.email,
//                  passsword: $scope.login.password
//              }
//          }).success(function(response) { 
//                console.log(response);
//          });
//       }
//    });

//   }]);


