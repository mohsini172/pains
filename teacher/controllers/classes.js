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
});
