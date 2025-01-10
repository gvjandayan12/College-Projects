<?php 

    session_start();
    include('sample.php');

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM purchase_record WHERE Customer = '$username'";
    $connection = mysqli_query($conn, $sql);

    if(mysqli_num_rows($connection) > 0){
        while($var=mysqli_fetch_assoc($connection)){
            echo$var["ID"] . "<br>";
            echo$var["Customer"] . "<br>";
            echo$var["Item"]. "<br>";
        }
    }

    mysqli_close($conn);

?>

