angular.module("pains").controller("classesController", function ($scope, $http, $mdSidenav) {
    $scope.toggleLeft = buildToggler('left');
    $scope.toggleRight = buildToggler('right');
    $scope.Students = {};
    $scope.test = 0;
    $scope.Students.Attendence = {};
    $scope.Students.Marks = {};
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
    $scope.totalmarks = {};
    $scope.typeOfMarks = {};
    $scope.submissionDate = {};
    function buildToggler(componentId) {
        return function () {
            $mdSidenav(componentId).toggle();
        }
    }
    $scope.isAttendence = false;
    $http.get('../student/getStudents.php')
    .then(function(data){
        $scope.classes = data.data;
        console.log(data);
    },function(){
        alert("There was some error fetching data");
    });


    $scope.submitAttendence = function(key){
        var data = {"Students":$scope.Students.Attendence,"date":$scope.submissionDate[key]};
        $http.post('../student/addAttendence.php',data)
        .then(function(data){
            var temp = data;
        },function(error){
            alert("There was an error");
        });
    };
    $scope.submitMarks = function(key){
        var data = {
                    "courseid":key,
                    "Students":$scope.Students.Marks,
                    "total":$scope.totalmarks[key],
                    "type": $scope.typeOfMarks[key],
                    "date": $scope.submissionDate[key]
                };
        $http.post('../student/addMarks.php',data)
        .then(function(data){
            alert("Success");
        },function(error){
            alert("There was an error in submission");
        }); 
    };
});
