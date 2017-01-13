<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Angular Material style sheet -->
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
</head>
<body ng-app="pains" ng-cloak>
  <!--
    Your HTML content here
  --> 
  <style>
    #login-v2 {
  height: 100%;
  overflow: hidden;
  background: url("../assets/images") no-repeat;
  background-size: cover;
}
#login-v2 #login-v2-intro {
  padding: 128px;
}
#login-v2 #login-v2-intro .logo {
  width: 128px;
  height: 128px;
  line-height: 128px;
  font-size: 86px;
  font-weight: 500;
  margin-bottom: 32px;
  color: #FFFFFF;
  border-radius: 2px;
  text-align: center;
}
#login-v2 #login-v2-intro .title {
  font-size: 42px;
  font-weight: 300;
}
#login-v2 #login-v2-intro .description {
  padding-top: 8px;
  font-size: 14px;
  max-width: 600px;
}
#login-v2 #login-v2-form-wrapper {
  width: 416px;
  min-width: 416px;
  /*max-width: 416px;*/
  height: 100%;
  background: #FFFFFF;
}
#login-v2 #login-v2-form-wrapper #login-v2-form {
  padding: 128px 48px 48px 48px;
}
#login-v2 #login-v2-form-wrapper #login-v2-form .logo {
  width: 128px;
  height: 128px;
  line-height: 128px;
  font-size: 86px;
  font-weight: 500;
  margin: 32px auto;
  color: #FFFFFF;
  border-radius: 2px;
}
#login-v2 #login-v2-form-wrapper #login-v2-form .title {
  font-size: 21px;
}
#login-v2 #login-v2-form-wrapper #login-v2-form .description {
  padding-top: 8px;
}
#login-v2 #login-v2-form-wrapper #login-v2-form form {
  width: 100%;
  text-align: left;
  padding-top: 32px;
}
#login-v2 #login-v2-form-wrapper #login-v2-form form md-checkbox {
  margin: 0;
}
#login-v2 #login-v2-form-wrapper #login-v2-form form .remember-forgot-password {
  font-size: 13px;
  margin-top: 8px;
}
#login-v2 #login-v2-form-wrapper #login-v2-form form .remember-forgot-password .remember-me {
  margin-bottom: 16px;
}
#login-v2 #login-v2-form-wrapper #login-v2-form form .remember-forgot-password .forgot-password {
  font-size: 13px;
  font-weight: 500;
  margin-bottom: 16px;
}
#login-v2 #login-v2-form-wrapper #login-v2-form form .submit-button {
  width: 100%;
  margin: 16px auto;
  display: block;
}
#login-v2 #login-v2-form-wrapper #login-v2-form .separator {
  font-size: 15px;
  font-weight: 600;
  margin: 24px auto 16px auto;
  position: relative;
  overflow: hidden;
  width: 100px;
  text-align: center;
  color: rgba(0, 0, 0, 0.54);
}
#login-v2 #login-v2-form-wrapper #login-v2-form .separator .text {
  display: inline-block;
  vertical-align: baseline;
  position: relative;
  padding: 0 8px;
  z-index: 9999;
}
#login-v2 #login-v2-form-wrapper #login-v2-form .separator .text:before, #login-v2 #login-v2-form-wrapper #login-v2-form .separator .text:after {
  content: '';
  display: block;
  width: 30px;
  position: absolute;
  top: 10px;
  border-top: 1px solid rgba(0, 0, 0, 0.12);
}
#login-v2 #login-v2-form-wrapper #login-v2-form .separator .text:before {
  right: 100%;
}
#login-v2 #login-v2-form-wrapper #login-v2-form .separator .text:after {
  left: 100%;
}
#login-v2 #login-v2-form-wrapper #login-v2-form .md-button.google, #login-v2 #login-v2-form-wrapper #login-v2-form .md-button.facebook {
  width: 70%;
  text-transform: none;
  color: #FFFFFF;
  font-size: 13px;
}
#login-v2 #login-v2-form-wrapper #login-v2-form .md-button.google md-icon, #login-v2 #login-v2-form-wrapper #login-v2-form .md-button.facebook md-icon {
  color: #FFFFFF;
  margin: 0 8px 0 0;
}
#login-v2 #login-v2-form-wrapper #login-v2-form .md-button.google {
  background-color: #D73D32;
}
#login-v2 #login-v2-form-wrapper #login-v2-form .md-button.facebook {
  background-color: #3f5c9a;
}
#login-v2 #login-v2-form-wrapper #login-v2-form .register {
  margin: 32px auto 24px auto;
  width: 250px;
  font-weight: 500;
}
#login-v2 #login-v2-form-wrapper #login-v2-form .register .text {
  margin-right: 8px;
}

@media only screen and (max-width: 500px) {
{
  
  #login-v2 #login-v2-form-wrapper #login-v2-form {
    text-align: center;
    padding: 24px;
  }
  #login-v2 #login-v2-form-wrapper #login-v2-form .md-button.google, #login-v2 #login-v2-form-wrapper #login-v2-form .md-button.facebook {
    width: 80%;
  }
}

  </style>
  <div id="login-v2" layout="row" layout-align="start">
    <div id="login-v2-intro" flex hide show-gt-sm>
        <div class="logo md-accent-bg">
            <span>F</span>
        </div>
        <div class="title" translate="LOGIN_V2.INTRO_TITLE">
            Welcome to the PAINS!
        </div>
        <div class="description" translate="LOGIN_V2.INTRO_DESCRIPTION">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ullamcorper nisl erat,
            vel convallis elit fermentum pellentesque. Sed mollis velit facilisis facilisis viverra.
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
                    <input type="email" name="email" ng-model="vm.form.email" placeholder="Email"
                           translate translate-attr-placeholder="LOGIN_V2.EMAIL"
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
                    <input type="password" name="password" ng-model="vm.form.password" placeholder="Password"
                           translate translate-attr-placeholder="LOGIN_V2.PASSWORD"
                           required>
                    <div ng-messages="loginForm.password.$error" role="alert">
                        <div ng-message="required">
                            <span translate="LOGIN_V2.ERRORS.PASSWORD_REQUIRED">Password field is required</span>
                        </div>
                    </div>
                </md-input-container>

                <div class="remember-forgot-password" layout="row" layout-sm="column"
                     layout-align="space-between center">
                    <md-checkbox class="remember-me" ng-model="data.cb1" aria-label="Remember Me">
                        <span translate="LOGIN_V2.REMEMBER_ME">Remember Me</span>
                    </md-checkbox>

                    <a ui-sref="app.pages_auth_forgot-password" class="forgot-password md-accent-color"
                       translate="LOGIN_V2.FORGOT_PASSWORD">Forgot Password?</a>
                </div>

                <md-button type="submit" class="md-raised md-accent submit-button" aria-label="LOG IN"
                           ng-disabled="loginForm.$invalid || loginForm.$pristine"
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
     * You must include the dependency on 'ngMaterial' 
     */
    angular.module('pains', ['ngMaterial']);
  </script>
  
</body>
</html>