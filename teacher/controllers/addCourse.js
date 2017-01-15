angular.module("pains").controller("addCourseController", function ($scope, $http, $mdSidenav) {
    $scope.toggleLeft = buildToggler('left');
    $scope.toggleRight = buildToggler('right');

    function buildToggler(componentId) {
        return function () {
            $mdSidenav(componentId).toggle();
        }
    }
    $scope.menu = [
        {
            link: '#/',
            title: 'My Classes',
            icon: 'dashboard'
        },
        {
            link: '#/addStudent',
            title: 'Register Student',
            icon: 'person_add'
        },
        {
            link: '#/addClass',
            title: 'Add New Class',
            icon: 'group_add'
        },
        {
            link: '#/addCourse',
            title: 'Add New Course',
            icon: 'local_library'
        }
    ];
    $http.get('../class/getClass.php')
    .then(function(data){
        $scope.classes = data.data;
    },function(error){
        alert("There was an error fetching classes");
    });
    $scope.submit = function(){
        $http.post('../courses/create.php',$scope.Course)
        .then(function(){
            alert("SUCCESS")
        },function(error){
            alert("there was an error in insertion");
        });
    }
});
