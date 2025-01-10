<?php 
    session_start();
    include('sample.php');
    $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>Cart</title>

    <style>
        body{
            background-color : #2EAF7D;
            margin : 0px;
        }


        .divTable{
            overflow-y : auto;
            position : absolute;
            height : 300px;  
            width : 700px;
            left : 50px;
            top : 200px;
        }

        table.tablee{
            background-color : #02353C;
            color : white;
            border-radius : 10px;
            width : 100%;   
            border-collapse: collapse;
        }


        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #02353C;
        }
    </style>

</head>
<body>
    <div class="divTable">
        <table class="tablee" border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Quantity</th>
                    <th>Item</th>
                    <th>Date & Time</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 

                $sql = "SELECT * FROM purchase_record WHERE Customer = '$username'";
                $connection = mysqli_query($conn, $sql);

                if(mysqli_num_rows($connection) > 0){
                    while($result = mysqli_fetch_assoc($connection)){
                    
                        echo "<tr>";
                        echo "<td>" . $result['ID'] . "</td>";
                        echo "<td>" . $result['Customer'] . "</td>";
                        echo "<td>" . $result['Quantity'] . "</td>";
                        echo "<td>" . $result['Item'] . "</td>";
                        echo "<td>" . $result['Date_Time'] . "</td>";
                        echo "</tr>";
                    }
                }
                mysqli_close($conn);
                
                ?>
                
            </tbody>
        </table>
    </div>

   
    <div class="div1">
        <h1 class="website_name">Tindahan ni Girly</h1>
        <button id="home" class="home">Home</button>
        <button id="shop" class="shop">Shop</button>
        <button class="about">About</button>
        <img id="cart" class="cart" src="assets/cart.jpg" alt="Error">
        <img id="user" class="user" src="assets/user.jpg" alt="Error">
        <img id="settings" class="settings" src=>
    </div>

    <script src="draft.js"></script>

</body>
</html>


<?php 

/*
    $sql= "DELETE FROM purchase_record WHERE Customer = 'Jairus'";
    $connection = mysqli_query($conn, $sql);

    
    $sql = "SELECT * FROM purchase_record";
    $connection = mysqli_query($conn, $sql);

    if(mysqli_num_rows($connection) > 0){
        
        while($result = mysqli_fetch_assoc($connection)){
            echo $result['ID'] . "<br>";
            echo $result['Customer'] . "<br>";
            echo $result['Quantity'] . "<br>";
            echo $result['Item'] . "<br>";
            echo $result['Date_Time'] . "<br>";
        }

        mysqli_close($conn);

    }
    */
        




    /*
    $customer = "Marius";
    $product = "New Balance Shoes";
    $ID = 3;

    $sql = "INSERT INTO purchase_record(Name)
            VALUES('$customer')";

    try{
        mysqli_query($conn, $sql);
        echo"It is connected YEHEEEY!";
    }
    catch(mysqli_sql_exception){
        echo"Couldn't connect";
    }
    
    mysqli_close($conn);*/

    /*
    $sql = "SELECT * FROM purchase_record WHERE name = 'Jairus'";
    $connection = mysqli_query($conn, $sql);

    if(mysqli_num_rows($connection) > 0){
        while($var=mysqli_fetch_assoc($connection)){
            echo$var["ID"] . "<br>";
            echo$var["Name"] . "<br>";
            echo$var["Item"]. "<br>";
        }
    }
    */

    /*
    $sql = "SELECT * FROM purchase_record";
    $connection = mysqli_query($conn, $sql);

    if(mysqli_num_rows($connection) > 0){
        while($result = mysqli_fetch_assoc($connection)){
            echo $result["ID"] . "<br>";
            echo $result["Name"] . "<br>";
            echo $result["Item"] . "<br>";
        }
    }

    mysqli_close($conn);
    */


    /*
    $customer = "Marius";
    $product = "New Balance Shoes";
    $ID = 3;

    $sql = "INSERT INTO purchase_record(ID, Name, Item)
            VALUES('$ID', '$customer', '$product')";

    try{
        mysqli_query($conn, $sql);
        echo"It is connected YEHEEEY!";
    }
    catch(mysqli_sql_exception){
        echo"Couldn't connect";
    }
    
    mysqli_close($conn);
    */

?>