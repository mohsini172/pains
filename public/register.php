<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Angular Material style sheet -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
</head>

<body ng-app="BlankApp" ng-cloak>
    <!--
    Your HTML content here
  -->
    <div ng-controller="registerController" id="register-v2" layout="row" layout-align="start">
        <div id="register-v2-intro" flex hide show-gt-sm>
            <div class="logo md-accent-bg">
                <span>F</span>
            </div>
            <div class="title" translate="REGISTER_V2.INTRO_TITLE">
                Welcome to the FUSE!
            </div>
            <div class="description" translate="REGISTER_V2.INTRO_DESCRIPTION">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ullamcorper nisl erat, vel convallis elit fermentum pellentesque.
                Sed mollis velit facilisis facilisis viverra.
            </div>
        </div>

        <div id="register-v2-form-wrapper" class="flex-scrollable md-whiteframe-8dp" layout="column" flex ms-scroll>
            <div id="register-v2-form">
                <div class="logo md-accent-bg" hide-gt-sm>
                    <span>F</span>
                </div>

                <div class="title" translate="REGISTER_V2.TITLE">Create an account</div>
                <div class="description" translate="REGISTER_V2.DESCRIPTION">Sed mollis velit facilisis facilisis viverra
                </div>

                <form name="registerForm" novalidate ng-submit="register()">
                    <md-input-container class="md-block" md-no-float>
                        <input name="username" ng-model="form.tname" placeholder="Name" translate translate-attr-placeholder="REGISTER_V2.NAME"
                            required>
                        <div ng-messages="registerForm.username.$error" role="alert">
                            <div ng-message="required">
                                <span translate="REGISTER_V2.ERRORS.USERNAME_REQUIRED">Username field is required</span>
                            </div>
                        </div>
                    </md-input-container>

                    <md-input-container class="md-block" md-no-float>
                        <input type="email" name="email" ng-model="form.email" placeholder="Email" translate translate-attr-placeholder="REGISTER_V2.EMAIL"
                            ng-pattern="/^.+@.+\..+$/" required>
                        <div ng-messages="registerForm.email.$error" role="alert" multiple>
                            <div ng-message="required">
                                <span translate="REGISTER_V2.ERRORS.EMAIL_REQUIRED">Email field is required</span>
                            </div>
                            <div ng-message="pattern">
                                <span translate="REGISTER_V2.ERRORS.EMAIL_MUST_VALID">Email must be a valid e-mail address</span>
                            </div>
                        </div>
                    </md-input-container>

                    <md-input-container class="md-block" md-no-float>
                        <input type="password" name="password" ng-model="form.password" placeholder="Password" translate translate-attr-placeholder="REGISTER_V2.PASSWORD"
                            required>
                        <div ng-messages="registerForm.password.$error" role="alert">
                            <div ng-message="required">
                                <span translate="REGISTER_V2.ERRORS.PASSWORD_REQUIRED">Password field is required</span>
                            </div>
                        </div>
                    </md-input-container>

                    <md-input-container class="md-block" md-no-float>
                        <input type="password" name="passwordConfirm" ng-model="form.passwordConfirm" placeholder="Password (Confirm)" translate
                            translate-attr-placeholder="REGISTER_V2.PASSWORD_CONFIRM" required>
                        <div ng-messages="registerForm.passwordConfirm.$error" role="alert">
                            <div ng-message="required">
                                <span translate="REGISTER_V2.ERRORS.PASSWORD_CONFIRM_REQUIRED">Password (Confirm) field is required</span>
                            </div>
                        </div>
                    </md-input-container>

                    <md-input-container class="md-block" md-no-float>
                        <input name="cnic" type="number" ng-model="form.tcnic" placeholder="CNIC" translate translate-attr-placeholder="REGISTER_V2.NAME"
                            required>
                        <div ng-messages="registerForm.cnic.$error" role="alert">
                            <div ng-message="required">
                                <span translate="REGISTER_V2.ERRORS.USERNAME_REQUIRED">CNIC Number is required</span>
                            </div>
                        </div>
                    </md-input-container>

                    <md-input-container class="md-block" md-no-float>
                        <input name="phone" ng-model="form.phone" placeholder="Phone Number" translate translate-attr-placeholder="REGISTER_V2.NAME"
                            required>
                        <div ng-messages="registerForm.phone.$error" role="alert">
                            <div ng-message="required">
                                <span translate="REGISTER_V2.ERRORS.USERNAME_REQUIRED">Phone Number is required</span>
                            </div>
                        </div>
                    </md-input-container>
                    
                    <md-input-container class="md-block" md-no-float>
                        <input name="address" ng-model="form.address" placeholder="Address"
                            required>
                        <div ng-messages="registerForm.address.$error" role="alert">
                            <div ng-message="required">
                                <span translate="REGISTER_V2.ERRORS.USERNAME_REQUIRED">Address field is required</span>
                            </div>
                        </div>
                    </md-input-container>

                    <div class="terms" layout="row" layout-align="center center">
                        <md-checkbox name="terms" ng-model="data.cb1" aria-label="I read and accept" required></md-checkbox>
                        <div layout="row" layout-sm="column" layout-align="start center">
                            <span translate="REGISTER_V2.READ_ACCEPT">I read and accept</span>
                            <a href="#" class="md-accent-color" translate="REGISTER_V2.TERMS_COND">terms and conditions</a>
                        </div>
                    </div>

                    <md-button type="submit" class="md-raised md-accent submit-button" aria-label="CREATE MY ACCOUNT" ng-disabled="registerForm.$invalid || registerForm.$pristine"
                        translate="REGISTER_V2.CREATE_ACCOUNT" translate-attr-aria-label="REGISTER_V2.CREATE_ACCOUNT">
                        CREATE MY ACCOUNT
                    </md-button>
                </form>

                <div class="login" layout="row" layout-sm="column" layout-align="center center">
                    <span class="text" translate="REGISTER_V2.ALREADY_HAVE">Already have an account?</span>
                    <a class="link" ui-sref="app.pages_auth_login-v2" translate="REGISTER_V2.LOGIN">Log in</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Angular Material requires Angular.js Libraries -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

    <!-- Angular Material Library -->
    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

    <!-- Your application bootstrap  -->
    <script type="text/javascript">    
        /**
         * You must include the dependency on 'ngMaterial' 
         */
        angular.module('BlankApp', ['ngMaterial'])
        .controller('registerController',function($scope,$http){
            $scope.register = function(){
                // $http({
                //     method: 'POST',
                //     url: '../teacher/create.php',
                //     data: {"tets":324},
                //     headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                // })
                // .success(function(data){
                //     console.log(data);
                // });
                $http.post('../teacher/create.php',$scope.form)
                .then(function(response){
                    alert("SUCCESS");
                })
                .error(function(response){
                    alert("Error");
                });
            };
            
        });
    </script>

</body>

</html>