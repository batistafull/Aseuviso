angular.module('App')
.controller('Add', function($scope,$http,$location,$cookies){ //Add
if(!$cookies.get('TOKEN')){
        $location.path('/login');
    }
	$scope.sus=false;
	$scope.agregar = function(){
		$http.get("http://aseuviso.ipromord.com/service/agregar.php?nombre="+$scope.nombre+"&apellidos="+$scope.apellidos+"&matricula="+$scope.matricula+"&telefono="+$scope.tel+"&correo"+$scope.correo).then(successCallback, errorCallback);
		function successCallback(response){
			$location.path('/user/'+$scope.matricula);
		}
		function errorCallback(error){}
	};
})