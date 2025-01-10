<?php

session_start();

include('sample.php');

$username = $_SESSION['username'];
$address1 = $_SESSION['address1'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pants Market</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>

    <div class="div4">
        <image class="CargoBrown" src="assets/Cargo.jpg"></image>
    </div>
    <div class="div5">
        <h1 class="CargoBrownName">Cargo</h1>
            <h1 class="CargoBrownPrice">$3000.00</h1>
            <h3 class="CargoBrownDescription">
            Cargo Brown is a warm, earthy color that blends rich brown tones with 
            subtle hints of olive or green, reminiscent of the ruggedness and 
            utility of military-style cargo clothing. This versatile shade evokes 
            a sense of durability, practicality, and groundedness. It is often 
            associated with outdoor gear, utility fashion, and nature-inspired 
            designs.
            </h3>

            //Cargo
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <button class="AddToCart" type="submit" name="pants_add_to_cart">Add To Cart</button>
                <input class="quantity" type="number" name="pants_quantity">
            </form>

    </div>

    <div class="div6">
        <img class="jeans" src="assets/Jeans.jpg" alt="Error"></img>
    </div>
    <div class="div7">
        <h1 class="JeansName">Jeans</h1>
        <h1 class="JeansPrice">$2000</h1>
        <h1 class="JeansDescription">The Cargo B Jeans are a stylish fusion of 
            rugged utility and modern denim design. These jeans are crafted from 
            high-quality, durable fabric that offers both comfort and flexibility, 
            making them perfect for daily wear. The unique cargo-inspired design 
            features multiple functional pockets, ideal for storing small essentials 
            while adding an extra element of style.</h1>

        //Jeans
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <button class="AddToCart1" type="submit" name="pants_add_to_cart1">Add To Cart</button>
            <input class="quantity1" type="number" name="pants_quantity1">
        </form>

    </div>

    <div class="div8">
        <img class="joggingpants" src="assets/JoggingPants.jpg" alt="Error">
    </div>"

    <div class="div9">
        <h1 class="JoggingPantsName">Jogging Pants</h1>
        <h1 class="JoggingPantsPrice">$2000</h1>
        <h1 class="JoggingPantsDescription"> perfect blend of comfort and casual 
            style. Crafted from soft, breathable fabric, they offer a relaxed fit 
            with just the right amount of stretch to keep you comfortable whether 
            you're lounging, exercising, or running errands. The elastic waistband 
            with an adjustable drawstring ensures a secure and customizable fit, 
            while the ribbed cuffs at the ankles add a sporty touch and help keep 
            the pants in place.</h1>

        //Jogging Pants

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <button class="AddToCart1" type="submit" name="pants_add_to_cart2">Add To Cart</button>
            <input class="quantity1" type="number" name="pants_quantity2">
        </form>
        
    </div>

    //Header
    <div class="div1">
        <h1 class="website_name">Website</h1>
        <button id="home1" class="home">Home</button>
        <button id="shop1" class="shop">Shop</button>
        <button class="about">About</button>
        <image id="cart" class="cart" src="assets/cart.jpg" alt="Error"></image>
    </div>
 
    <script src="draft.js"></script>
</body>
</html>

<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $pants_quantity = filter_input(INPUT_POST, "pants_quantity", FILTER_SANITIZE_SPECIAL_CHARS);
      $pants_quantity1 = filter_input(INPUT_POST, "pants_quantity1", FILTER_SANITIZE_SPECIAL_CHARS);
      $pants_quantity2 = filter_input(INPUT_POST, "pants_quantity2", FILTER_SANITIZE_SPECIAL_CHARS);


      if(isset($_POST['pants_add_to_cart'])){
        $pants_quantity = $_POST['pants_quantity'];
        $pants_product = "Cargo";
        $cargo = 3000;

        $pants_insert_quantity = "INSERT INTO purchase_record(Customer, Quantity, Item)
                                VALUE('$username', '$pants_quantity', '$pants_product')";

                                $pants_connection = mysqli_query($conn, $pants_insert_quantity);

                                $clothe_order = "INSERT INTO purchase_order(Name, Address, Product, Quantity, Price)
                                VALUES('$username', '$address1', '$pants_product', '$pants_quantity', '$cargo')";

                                $clothe_order = mysqli_query($conn, $clothe_order);
                                
      }
      if(isset($_POST['pants_add_to_cart1'])){
        $pants_quantity1 = $_POST['pants_quantity1'];
        $pants_product1 = "Jeans";
        $jeans = 2000;

        $pants_insert_quantity1 = "INSERT INTO purchase_record(Customer, Quantity, Item)
                                VALUE('$username', '$pants_quantity1', '$pants_product1')";

                                $pants_connection1 = mysqli_query($conn, $pants_insert_quantity1);

                                $clothe_order1 = "INSERT INTO purchase_order(Name, Address, Product, Quantity, Price)
                                VALUES('$username', '$address1', '$pants_product1', '$pants_quantity1', '$jeans')";

                                $clotheOrder = mysqli_query($conn, $clothe_order1);
                                
      }
      if(isset($_POST['pants_add_to_cart2'])){
        $pants_quantity2 = $_POST['pants_quantity2'];
        $pants_product2 = "Jogging Pants";
        $joggingpants = 3000;

        $pants_insert_quantity2 = "INSERT INTO purchase_record(Customer, Quantity, Item)
                                VALUE('$username', '$pants_quantity2', '$pants_product2')";

                                $pants_connection2 = mysqli_query($conn, $pants_insert_quantity2);

                                $clothe_order2 = "INSERT INTO purchase_order(Name, Address, Product, Quantity, Price)
                                VALUES('$username', '$address1', '$pants_product2', '$pants_quantity2', '$joggingpants')";

                                $clothe_order = mysqli_query($conn, $clothe_order2);


                                
      }
      



    }

    mysqli_close($conn);

?>  