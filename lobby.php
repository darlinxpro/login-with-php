<?php 
    session_start();
    if(!isset($_SESSION['username1'])){
        session_destroy();
        header("Location: index.php");
        exit;
    } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ad.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="top">Welcome <?php echo $_SESSION['username1']; ?></div>
<?php 
        //echo "</p> Bienvenido ". $_SESSION['username']. "</p>"; 
        $conn = mysqli_connect("localhost", "root", "", "users");
        $consult = "SELECT * FROM user_credentials";
        $result = mysqli_query($conn, $consult);
    ?>
        <div class="cred">
    <?php
        echo "<table>";
        echo "<tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Ciudad</th>
        </tr>";
        while ($fila = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$fila["id_user"]."</td>
                    <td>".$fila["name_user"]."</td>
                    <td>".$fila["email_user"]."</td>
                    <td>".$fila["on_user"]."</td>
                </tr>";
        }
        echo "</table>
        </div>";
        mysqli_close($conn);
    ?>
        <div class="vent2">
            <form action="process.php"><button type="submit" name="closse">Salir</button></form>                
        </div>
        <div class="vent3"></div>
    </div>
</body>
</html>
<?php 
if(isset($_POST['closse'])){
    $conn-close();
    session_destroy();
    header("Location: index.php");
    exit;
}
}
?>