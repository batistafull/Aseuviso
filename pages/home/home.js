angular.module('App')
.controller('Home', function($scope,$location,$cookies){ //home
    if(!$cookies.get('TOKEN')){
        $location.path('/login');
    }
    
    $scope.cerrar = function(){
        $cookies.remove('TOKEN')
        $location.path('/login');
    }

})