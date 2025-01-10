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
    <link rel="stylesheet" href="design.css">
    <title>Document</title>
    
    <style>
        div.forAddress{
            height : 150px;
            width : 400px;
            background-color : #449342;
            position : absolute;
            top : 170px;
            border-radius : 10px;
            display : none;
        }
        p.addresslocation{
            height : 100px;
            width : 200px;
            font-size : 25px;
            font-family: Arial, Helvetica, sans-serif;
            position : absolute;
            left : 45px;
            bottom : 10px;
        }
        input.InputAddress{
            height : 40px;
            border-radius : 10px;
            width : 325px;
            position : absolute;
            top : 50px;
            left : 40px;
            font-size : 20px;
        }
        input.enterAddress{
            height : 40px;
            width : 90px;
            font-size : 20px;
            position : absolute;
            left : 150px;
            top : 100px;
            border-radius : 20px;
            cursor : pointer;
        }
        input.enterAddress:hover{
            background-color : yellow;
            transform : scale(1.2);
        }
    </style>
</head>
<body>

    <div class="div4">
        <image class="nikeposter1" src="assets/Nike.jpg"></image>
    </div>
    <div class="div5">
        <h1 class="NikeAllWhite">Nike All White</h3>
            <h1 class="NikeAllWhitePrice">$3000.00</h1>
            <h3 class="NikeAllWhiteDescription">
                Step into timeless elegance with the Nike All-White Shoe. Designed for those who appreciate 
                minimalist style without compromising on performance, this shoe offers the perfect blend 
                of comfort, durability, and sleek design. Featuring a crisp, all-white leather or synthetic 
                upper, the clean aesthetic is complemented by subtle Nike branding, allowing you to pair 
                these kicks with any outfit—from casual streetwear to athletic wear.
            </h3>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <button id="addtocart" class="AddToCart" type="submit" name="add_to_cart">Add To Cart</button>
                <input class="quantity" type="number" name="quantity" required>
            </form>

    </div>

    <div class="div6">
        <img class="nikeposter2" src="assets/Nike1.jpg" alt="Error"></img>
    </div>
    <div class="div7">
        <h1 class="NikeGreen">Nike Green</h1>
        <h1 class="NikeGreenPrice">$2000</h1>
        <h1 class="NikeGreenDescription"    >Nike Green is a vibrant, earthy shade of green often 
            associated with the brand's sporty and sustainable 
            ethos. It evokes a sense of nature, energy, and 
            vitality, commonly used in athletic wear and products 
            to emphasize performance, innovation, and 
            eco-consciousness.</h1>


            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <button class="AddToCart1" type="submit" name="add_to_cart1">Add To Cart</button>
                <input class="quantity1" type="number" name="quantity1">
            </form>

    </div>

    <div class="div8">
        <img class="nikeposter3" src="assets/CasualSneakers.jpg" alt="Error">
    </div>"

    <div class="div9">
        <h1 class="CasualSneakers">Nike Brown</h1>
        <h1 class="CasualSneakersPrice">$2000</h1>
        <h1 class="CasualSneakersDescription">Nike Brown is a rich, earthy tone that blends warmth and 
            durability, often used in Nike’s collections to convey a natural, grounded aesthetic. 
            It’s commonly featured in footwear, apparel, and accessories, evoking a sense of ruggedness 
            and versatility, while also complementing Nike's focus on style 
            and performance.</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <button class="AddToCart1" type="submit" name="add_to_cart2">Add To Cart</button>
            <input class="quantity1" type="number" name="quantity2"> 
        </form>
    </div>

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
        $quantity = filter_input(INPUT_POST, "quantity", FILTER_SANITIZE_SPECIAL_CHARS);
        $quantity1 = filter_input(INPUT_POST, "quantity1", FILTER_SANITIZE_SPECIAL_CHARS);
        $quantity2 = filter_input(INPUT_POST, "quantity2", FILTER_SANITIZE_SPECIAL_CHARS);
    
        //NIKE ALL WHITE
       if(isset($_POST['add_to_cart'])){
            $quantity = $_POST['quantity'];
            $product = "Nike All White";
            $price = 3000;

            $insert_quantity = "INSERT INTO purchase_record(Customer, Quantity, Item)
                                VALUE('$username', '$quantity', '$product')";

                                $shoeConnection = mysqli_query($conn, $insert_quantity);

                                $insert_order = "INSERT INTO purchase_order(Name, Address, Product, Quantity, Price)
                                VALUES('$username', '$address1', '$product', '$quantity', '$price')";

                                $shoe_order = mysqli_query($conn, $insert_order);
                                
                                
       }
       //NIKE ALL WHITE


       //NIKE GREEN
       if(isset($_POST['add_to_cart1'])){
        $quantity1 = $_POST['quantity1'];
        $product1 = "Nike Green";
        $price1 = 3000;

        $insert_quantity1 = "INSERT INTO purchase_record(Customer, Quantity, Item)
                            VALUE('$username', '$quantity1', '$product1')";

                            $shoeConnection1 = mysqli_query($conn, $insert_quantity1);

                            $insert_order1 = "INSERT INTO purchase_order(Name, Address, Product, Quantity, Price)
                            VALUES('$username', '$address1', '$product1', '$quantity1', '$price1')";

                            $shoe_order = mysqli_query($conn, $insert_order1);
       }
       //NIKE GREEN


       //NIKE BROWN
       if(isset($_POST['add_to_cart2'])){
        $quantity2 = $_POST['quantity2'];
        $product2 = "Nike Brown";
        $price2 = 3000;


        $insert_quantity2 = "INSERT INTO purchase_record(Customer, Quantity, Item)
                            VALUES('$username', '$quantity2', '$product2')";


                            $shoeConnection2 = mysqli_query($conn, $insert_quantity2);


                            
                            $insert_order = "INSERT INTO purchase_order(Name, Address, Product, Quantity, Price)
                            VALUES('$username', '$address1', '$product2', '$quantity2', '$price2')";

                            $shoe_order = mysqli_query($conn, $insert_order);


       }
       //NIKE BROWN

       
    }

    mysqli_close($conn);

?>


<?php 




?>