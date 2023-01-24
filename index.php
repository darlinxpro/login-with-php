<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        $servername = "localhost";
        $username = "root";
        $pwd = "";
        $dbname = "users";

        $conn = new mysqli($servername, $username, $pwd, $dbname);

        if (!$conn) {
            die("conection failed: " . $conn->conect_error);
        }

        /*$sql = "INSERT INTO user_credentials(name_user, pwd_user ,email_user, on_user) VALUES ('Darlin','medranodarlin@gmail.com','123','0')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        }

        else {
            echo "Error" . $sql . "<br>" . $conn->error;
        }*/
    ?>
    
</body>
</html>