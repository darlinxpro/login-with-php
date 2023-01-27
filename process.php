<?php
$servername = "localhost";
$username = "root";
$pwd = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $pwd, $dbname);

    if(isset($_POST['Login'])){

        $sql = "SELECT * FROM user_credentials WHERE name_user='".$_POST['username1']."' AND pwd_user='".$_POST['pwd3']."'";

        $username = $_POST['username1'];
        
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) === 1 ){
            //echo "Bienvenido " . $_POST['username'];
            session_start();
            $_SESSION['username1'] = $_POST['username1'];
            header("Location: lobby.php");
        }
    }
    elseif (isset($_POST['Register'])){
            //validar disponibilidad del usuario
            $query = "SELECT * FROM user_credentials WHERE name_user='".$_POST['username']."'";
            $result = $conn->query($query);
        
            if(mysqli_num_rows($result) >= 1) {
                header("Location: index.php?id=13");
                exit;
            } else {
                //buscar disponibilidad del email
                $sql = "SELECT * FROM user_credentials WHERE name_user='".$_POST['username']."'";
        
                if(mysqli_num_rows($result) === 0) {
                    $user = $_POST['username'];
                    $email = $_POST['email'];
                    $pwd1 = $_POST['pwd1'];
                    $pwd2 = $_POST['pwd2'];
                    // si la contraseña coincide
                    if($pwd1 == $pwd2){
        
                        $sql = "INSERT INTO user_credentials (name_user, pwd_user, email_user, on_user) VALUES ('$user', '$pwd1', '$email', '0')";
        
                        if($conn->query($sql) === TRUE) {
                            session_start();
                            $_SESSION['username1'] = $_POST['username1'];
                            header("Location: lobby.php");
                        } else {
                            echo "Error" . $sql . "<br>" . $conn->error;
                        }
                    
                } else {
                    header("Location: index.php?id=14");
                    exit;
                    }
                }
            }
    }
    else {
        header("Location: index.php?id=12");
        exit;
    }
$conn->close();

?>