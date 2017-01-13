angular.module("pains", ["ngRoute", "ngMaterial"]).config(['$routeProvider', function ($routeProvider) {
    $routeProvider.
        when('/', {
            templateUrl: 'views/classes.html'
            , controller: 'classesController'
        })
        .otherwise({
            redirectTo: '/'
        });
}]);