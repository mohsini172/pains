angular.module("pains").controller("classesController", function ($scope, $http, $mdSidenav) {
    $scope.toggleLeft = buildToggler('left');
    $scope.toggleRight = buildToggler('right');

    function buildToggler(componentId) {
        return function () {
            $mdSidenav(componentId).toggle();
        }
    }
    $scope.isAttendence = false;
    $scope.classes = {
        "BSCS-4A": {
            "subject": "Maths",
            "students": {
                "0": {
                    "name": "Mohsin Ammar"
                },
                "1": {
                    "name": "Jamal Hassan Sargana"
                },
                "2": {
                    "name": "Waqas Javed"
                }
            }
        },
        "BSCS-4B": {
            "subject": "English",
            "students": {
                "0": {
                    "name": "Mohsin Ammar"
                },
                "1": {
                    "name": "Jamal Hassan Sargana"
                },
                "2": {
                    "name": "Waqas Javed"
                }
            }
        },
        "BSCS-4C": {
            "subject": "Urdu",
            "students": {
                "0": {
                    "name": "Mohsin Ammar"
                },
                "1": {
                    "name": "Jamal Hassan Sargana"
                },
                "2": {
                    "name": "Waqas Javed"
                }
            }
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
    $http.get('../student/getStudents.php')
    .then(function(data){
        $scope.classes = data.data;
        console.log(data);
    },function(){

    })
});
