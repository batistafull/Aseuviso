angular.module('App')
.controller('Recarga',  function($scope,$http,$cookies,$location){ //Recarga
if(!$cookies.get('TOKEN')){
        $location.path('/login');
    }
    $scope.id = "";
    $scope.busqueda = "";
    $scope.estado = {};
    $scope.buscar = function(){
       $http.get("http://aseuviso.ipromord.com/service/getStatus.php?id="+$scope.id)
	.then(successCallback, errorCallback);

function successCallback(response){
    $scope.busqueda=response.data;
    
    if($scope.busqueda[0].STATUS == 'a'){
        $scope.estado={
            'estado': 'activo'
        };
        $scope.btnR = false;
    }else{
        $scope.estado={
            'estado': 'suspendido'
        };
        $scope.btnR = true;
    }
    
}
function errorCallback(error){
    
}
    }
   $scope.recargar = function(){
       $http.get("http://aseuviso.ipromord.com/service/recarga.php?id="+$scope.id)
	.then(successCallback, errorCallback);
	function successCallback(response){
	    $scope.estado = response.data;
}
function errorCallback(error){
    
}

   }
    
})