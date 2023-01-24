<?php 

    ////////////////////////////////
        function conexion() {
                // You mysql Credentials
            $servername = "localhost";
            $username = "root";
            $pwd = "";
            $dbname = "users";

            $conn = new mysqli($servername, $username, $pwd, $dbname);

            if (!$conn) {
                die("conection failed: " . $conn->conect_error);
            }

            echo "conexion exitosa!";
        } 
        
        /*
        $sql = "INSERT INTO user_credentials(name_user, pwd_user ,email_user, on_user) VALUES ('Darlin','prueba@gmail.com','123','0')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        }

        else {
            echo "Error" . $sql . "<br>" . $conn->error;
        }
        */



?>