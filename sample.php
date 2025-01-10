<?php 
    
    $serverDB = "localhost";
    $userDB = "root";
    $passDB = "";
    $nameDB = "customerpurchase";

    $conn = mysqli_connect($serverDB, $userDB, $passDB, $nameDB);

    if($conn){
        echo"You are connected!";
    }
    else{
        echo"couldn't connect";
    }

?>