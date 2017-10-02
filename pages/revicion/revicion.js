angular.module('App')
.controller('Revicion',  function($scope,$http,$cookies,$location){ //Revicion
    if(!$cookies.get('TOKEN')){
        $location.path('/login');
    }
    $scope.estado = [];
    $scope.ver = function(){
	$http.get("http://aseuviso.ipromord.com/service/getStatus.php?id="+$scope.id)
	.then(successCallback, errorCallback);

function successCallback(response){
        $scope.estado = response.data;
}
function errorCallback(error){
    
}
    }
})