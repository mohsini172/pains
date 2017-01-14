angular.module("pains", ["ngRoute", "ngMaterial"]).config(['$routeProvider', function ($routeProvider) {
    $routeProvider.
        when('/', {
            templateUrl: 'views/classes.html',
            controller: 'classesController'
        })
        .when('/addClass',{
            templateUrl:'views/addClass.html',
            controller:'addClassController'
        })
        .when('/addCourse',{
            templateUrl:'views/addCourse.html',
            controller:'addCourseController'
        })
        .when('/addStudent',{
            templateUrl:'views/addStudent.html',
            controller:'addStudentController'
        })
        .otherwise({
            redirectTo: '/'
        });
}]);