angular.module('App')
.controller('Login', function($scope,$http,$routeParams,$location,$cookies){ //Login
if($cookies.get('TOKEN')){
        $location.path('/');
    }else{
        $scope.estado={};
  $scope.entrar = function(){
      function makeid() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < 20; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}
$http.get("http://aseuviso.ipromord.com/service/login.php?matricula="+$scope.matricula+"&pw="+$scope.pw+"&token="+makeid()).then(successCallback, errorCallback);
  function successCallback(response){
      $scope.estado = response.data;
      if($scope.estado.estado == 'Correcto'){
       $cookies.put('TOKEN', makeid());
    $location.path('/');
          
      }
  }
  function errorCallback(error){}
   
  }
    }
})