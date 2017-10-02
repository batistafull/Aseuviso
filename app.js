angular.module('App', ["ngRoute","ngCookies"])
.config(function($routeProvider,$locationProvider){
 $locationProvider.hashPrefix('');
	$routeProvider
	.when("/",{
		controller: "Home",
		templateUrl: "pages/home/home.html"
	}).when("/add",{
		controller: "Add",
		templateUrl: "pages/user/user.html"
	}).when("/user/:mat",{
		controller: "User",
		templateUrl: "pages/user/user.html"
	}).when("/lista",{
		controller: "Lista",
		templateUrl: "pages/lista/lista.html"
	}).when("/revicion",{
		controller: "Revicion",
		templateUrl: "pages/revicion/revicion.html"
	}).when("/recarga",{
		controller: "Recarga",
		templateUrl: "pages/recarga/recarga.html"
	}).when("/configuracion",{
		controller: "Configuracion",
		templateUrl: "pages/configuracion/configuracion.html"
	}).when("/login",{
		controller: "Login",
		templateUrl: "pages/login/login.html"
	}).otherwise({
        controller: "Home",
		templateUrl: "pages/home/home.html"
    });
});