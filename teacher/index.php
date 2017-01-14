<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Angular Material style sheet -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>body{font-family: 'Quicksand', sans-serif;}</style>
</head>

<body ng-app="pains" ng-cloak>
    <div id="main" ng-view></div>

    <!-- Fab Icon Menu -->
    <md-fab-speed-dial md-direction="up" class="md-fling md-fab-bottom-right" >
        <md-fab-trigger>
            <md-button aria-label="menu" class="md-fab md-warn">
                <md-icon> add </md-icon>
            </md-button>
        </md-fab-trigger>

        <md-fab-actions>
            <md-button aria-label="Twitter" class="md-fab md-warn md-raised md-mini">
                <md-icon aria-label="Twitter"> menu </md-icon>
            </md-button>
            <md-button aria-label="Facebook" class="md-fab md-warn md-raised md-mini ">
                <md-icon aria-label="Facebook"> menu </md-icon>
            </md-button>
            <md-button aria-label="Google Hangout" class="md-fab md-warn md-raised md-mini ">
                <md-icon aria-label="Google Hangout"> menu </md-icon>
            </md-button>
        </md-fab-actions>
    </md-fab-speed-dial>

    <!-- Angular Material requires Angular.js Libraries -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.0/angular-route.min.js'></script>

    <!-- Angular Material Library -->
    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

    <!-- Your application bootstrap  -->
    <script src="app.js" type="text/javascript"></script>
    <script src="controllers/classes.js"></script>
    <script src="controllers/addClass.js"></script>
    <script src="controllers/addCourse.js"></script>
    <script src="controllers/addStudent.js"></script>

</body>

</html>