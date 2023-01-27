<!DOCTYPE html>
<?php 
$hidden = "form--hidden";
if(isset($_GET['id'])) {
    $error_number = $_GET['id'];
}
else {
    $error_number = 0;
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Documento</title>
</head>
<body>
    <div class="container">
        <!--  Login Master  -->
        <form class="form 
        <?php 
            if($error_number == 2){
                echo $hidden;
            }
        ?>
        " id="login" method="POST" action="process.php">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error">
                <?php
                    if($error_number == 12){
                        echo "Username or Password Invalid";
                    }
                ?>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="username1" autofocus placeholder="Username or Email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="pwd3" autofocus placeholder="password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="Login">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="index.php?id=2" name="linkCreateAccount" id="linkCreateAccount">Don't have an account</a>
            </p>

        </form>
        
        <!--  Create New Acc Master  -->
        <form class="form
        <?php
            if($error_number != 2){
                echo $hidden;
            }
        ?>
        " id="createAccount" method="POST" action="process.php">
            <h1 class="form__title">Register</h1>

            <div class="form__message form__message--error">
            <?php
                if($error_number == 13){
                    header("Location: index.php?id=2");
                    echo "Usuario en uso";
                }
            ?>
            </div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" name="username" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>            
            
            <div class="form__input-group">
                <input type="text" class="form__input" name="email" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input type="password" class="form__input" name="pwd1" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
                <input type="password" class="form__input" name="pwd2" autofocus placeholder="Confirm Password">
                <div class="form__input-error-message"></div>
            </div>

            <button class="form__button" type="submit" name="Register">Continue</button>

            <p class="form__text">
                <a class="form__link" href="index.php" id="linkLogin">Do you have an Account? Sign In</a>
            </p>
        </form>
    </div>
</body>
</html>