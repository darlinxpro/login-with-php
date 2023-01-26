<?php
$servername = "localhost";
$username = "root";
$pwd = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $pwd, $dbname);

if(isset($_POST['Login'])){

    $sql = "SELECT * FROM user_credentials WHERE name_user='".$_POST['username']."' AND pwd_user='".$_POST['pwd']."'";

    $username = $_POST['username'];
    
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) === 1 ){
        echo "Bienvenido " . $_POST['username'];
}

else {
    header("Location: index.php?id=-1");
}
}
    

?>