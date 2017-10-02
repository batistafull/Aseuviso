angular.module('App')
.controller('User', function($scope,$http,$routeParams,$location,$cookies){ //User
	if(!$cookies.get('TOKEN')){
        $location.path('/login');
    }
	$scope.sus= true; //variable para activar o desastivar el boton de suspender
		$http.get("http://aseuviso.ipromord.com/service/dataList.php?mat="+$routeParams.mat).then(successCallback, errorCallback);
 
	$scope.editar = function(){
		$http.get("http://aseuviso.ipromord.com/service/modificar.php?id="+$scope.id+"&nombre="+$scope.nombre+"&apellidos="+$scope.apellidos+"&mat="+$scope.matricula+"&telefono="+$scope.tel+"&correo="+$scope.correo).then(successCallback, errorCallback);
		function successCallback(response){
			$location.path('/user/'+$scope.matricula);
		}
		function errorCallback(error){}
	};
function successCallback(response){
    $scope.nombre = response.data[0].NOMBRE;
    $scope.apellidos = response.data[0].APELLIDOS;
	$scope.matricula = response.data[0].MATRICULA;
	$scope.tel = response.data[0].TEL;
	$scope.correo = response.data[0].EMAIL;
	$scope.id = response.data[0].ID;
	
}
function errorCallback(error){}
})