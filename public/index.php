<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Angular Material style sheet -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>

<body ng-app="pains" ng-cloak>
    <!--
    Your HTML content here
  -->

    <div id="login-v2" layout="row" layout-align="start">
        <div id="login-v2-intro" flex hide show-gt-sm>
            <div class="logo md-accent-bg">
                <span>F</span>
            </div>
            <div class="title" translate="LOGIN_V2.INTRO_TITLE">
                Welcome to the PAINS!
            </div>
            <div class="description" translate="LOGIN_V2.INTRO_DESCRIPTION">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ullamcorper nisl erat, vel convallis elit fermentum pellentesque.
                Sed mollis velit facilisis facilisis viverra.
            </div>
        </div>

        <div id="login-v2-form-wrapper" class="flex-scrollable md-whiteframe-8dp" ms-scroll flex>
            <div id="login-v2-form">
                <div class="logo md-accent-bg" hide-gt-sm>
                    <span>F</span>
                </div>

                <div class="title" translate="LOGIN_V2.TITLE">Log in to your account</div>
                <div class="description" translate="LOGIN_V2.DESCRIPTION">Sed mollis velit facilisis facilisis viverra</div>

                <form name="loginForm" novalidate>
                    <md-input-container class="md-block" md-no-float>
                        <input type="email" name="email" ng-model="vm.form.email" placeholder="Email" translate translate-attr-placeholder="LOGIN_V2.EMAIL"
                            ng-pattern="/^.+@.+\..+$/" required>
                        <div ng-messages="loginForm.email.$error" role="alert" multiple>
                            <div ng-message="required">
                                <span translate="LOGIN_V2.ERRORS.EMAIL_REQUIRED">Email field is required</span>
                            </div>
                            <div ng-message="pattern">
                                <span translate="LOGIN_V2.ERRORS.EMAIL_MUST_VALID">Email must be a valid e-mail address</span>
                            </div>
                        </div>
                    </md-input-container>

                    <md-input-container class="md-block" md-no-float>
                        <input type="password" name="password" ng-model="vm.form.password" placeholder="Password" translate translate-attr-placeholder="LOGIN_V2.PASSWORD"
                            required>
                        <div ng-messages="loginForm.password.$error" role="alert">
                            <div ng-message="required">
                                <span translate="LOGIN_V2.ERRORS.PASSWORD_REQUIRED">Password field is required</span>
                            </div>
                        </div>
                    </md-input-container>

                    <div class="remember-forgot-password" layout="row" layout-sm="column" layout-align="space-between center">
                        <md-checkbox class="remember-me" ng-model="data.cb1" aria-label="Remember Me">
                            <span translate="LOGIN_V2.REMEMBER_ME">Remember Me</span>
                        </md-checkbox>

                        <a ui-sref="app.pages_auth_forgot-password" class="forgot-password md-accent-color" translate="LOGIN_V2.FORGOT_PASSWORD">Forgot Password?</a>
                    </div>

                    <md-button type="submit" class="md-raised md-accent submit-button" aria-label="LOG IN" ng-disabled="loginForm.$invalid || loginForm.$pristine"
                        translate="LOGIN_V2.LOG_IN" translate-attr-aria-label="LOGIN_V2.LOG_IN">
                        LOG IN
                    </md-button>
                </form>

                <div class="separator">
                    <span class="text" translate="LOGIN_V2.OR">OR</span>
                </div>


                <div class="register" layout="row" layout-sm="column" layout-align="center center">
                    <span class="text" translate="LOGIN_V2.DONT_HAVE_ACCOUNT">Don't have an account?</span>
                    <a class="link" ui-sref="app.pages_auth_register-v2" translate="LOGIN_V2.CREATE_ACCOUNT">Create an
                    account</a>
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
     * You must include thea dependency on 'ngMaterial' 
     */
    angular.module('pains', ['ngMaterial']);
</script>

</body>

</html>