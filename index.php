<!DOCTYPE html>
<?php
    include 'essentials.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <?php   
        conexion();
    ?>
<div class="container">
        <!--  Login Master  -->
        <form class="form" id="login">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Username or Email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="/" id="linkCreateAccount">Don't have an account</a>
            </p>

        </form>
        
        <!--  Create New Acc Master  -->
        <form class="form form--hidden" id="createAccount">
            <h1 class="form__title">Register</h1>

            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>            
            
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
                <input type="password" class="form__input" autofocus placeholder="Confirm Password">
                <div class="form__input-error-message"></div>
            </div>

            <button class="form__button" type="submit">Continue</button>

            <p class="form__text">
                <a class="form__link" href="/" id="linkLogin">Do you have an Account? Sign In</a>
            </p>
        </form>
    </div>
    <script src="./main.js"></script>
</body>
</html>