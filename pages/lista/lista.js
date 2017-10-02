angular.module('App').controller('Lista',  function($scope,$http,$cookies,$location){ //Lista
if(!$cookies.get('TOKEN')){
        $location.path('/login');
    }
	$scope.posts = [];
	$http.get("http://aseuviso.ipromord.com/service/dataList.php")
	.then(successCallback, errorCallback);

function successCallback(response){
    $scope.posts = response.data;
}
function errorCallback(error){
}
})