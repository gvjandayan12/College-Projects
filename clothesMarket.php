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

</head>
<body>

    <div class="div4">
        <image class="AddidasRekive" src="assets/Rekive.jpg"></image>
    </div>
    <div class="div5">
        <h1 class="AddidasName">Rekive</h3>
            <h1 class="AddidasPrice">$3000.00</h1>
            <h3 class="AddidasDescription">
            Adidas clothing combines performance-driven designs with modern style, 
            creating pieces that are perfect for both athletic endeavors and casual 
            wear. Crafted with high-quality, breathable fabrics, Adidas apparel 
            ensures maximum comfort and flexibility, whether you're hitting the 
            gym, going for a run, or simply enjoying a laid-back day.
            </h3>

        //Rekive
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <button class="AddToCart" type="submit" name="clothes_add_to_cart">Add To Cart</button>
            <input class="quantity" type="number" name="clothe_quantity">
        </form>
    </div>

    <div class="div6">
        <img class="Strikot" src="assets/Strikot.jpg" alt="Error"></img>
    </div>
    <div class="div7">
        <h1 class="StrikotName">Strikot</h1>
        <h1 class="StrikotPrice">$2000</h1>
        <h1 class="StrikotDescription"> are designed to deliver top-tier performance,
             comfort, and style. Crafted with lightweight, breathable fabrics, 
             Nike strikots feature moisture-wicking technology that helps keep 
             you dry and cool, whether you're on the field, at the gym, or 
             showing off your athletic style off-duty. The Dri-FIT fabric 
             ensures sweat is quickly absorbed and evaporated, enhancing 
             comfort during even the most intense activities.</h1>

        //Strikot
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <button class="AddToCart1" type="submit" name="clothes_add_to_cart1">Add To Cart</button>
            <input class="quantity1" type="number" name="clothe_quantity1">
        </form>



    </div>

    <div class="div8">
        <img class="Alabama" src="assets/Alabama.jpg" alt="Error">
    </div>"

    <div class="div9">
        <h1 class="AlabamaName">Alabama</h1>
        <h1 class="AlabamaPrice">$2000</h1>
        <h1 class="AlabamaDescription">The Nike Alabama collection brings together 
            the spirit of the University of Alabama with Nike's signature 
            performance and style. Featuring bold team colors—crimson and 
            white—this line of apparel is perfect for passionate Alabama 
            fans who want to show their school pride both on and off the field. 
            The collection includes a range of high-quality products, from Nike 
            Alabama jerseys and t-shirts to hoodies, jackets, and hats, each 
            designed with premium fabrics for comfort, durability, and 
            breathability. Nike’s iconic Dri-FIT technology keeps you cool 
            and dry, whether you’re cheering in the stands or out on a jog.</h1>
    
        //Alabama
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <button class="AddToCart1" type="submit" name="clothes_add_to_cart2">Add To Cart</button>
            <input class="quantity1" type="number" name="clothe_quantity2">
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
        $clothe_quantity = filter_input(INPUT_POST, "clothe_quantity", FILTER_SANITIZE_SPECIAL_CHARS);
        $clothe_quantity1 = filter_input(INPUT_POST, "clothe_quantity1", FILTER_SANITIZE_SPECIAL_CHARS);
        $clothe_quantity2 = filter_input(INPUT_POST, "clothe_quantity2", FILTER_SANITIZE_SPECIAL_CHARS);

        if(isset($_POST['clothes_add_to_cart'])){
            $clothe_quantity = $_POST['clothe_quantity'];
            $clothe_product = "Rekive";
            $price_clothes = 3000;


            $insert_quantity1 = "INSERT INTO purchase_record(Customer, Quantity, Item)
                                VALUES('$username', '$clothe_quantity', '$clothe_product')";

                                $clothe_connection = mysqli_query($conn, $insert_quantity1);

                                $order = "INSERT INTO purchase_order(Name, Address, Product, Quantity, Price)
                                VALUES('$username', '$address1', '$clothe_product', '$clothe_quantity', '$price_clothes')";

                                $clothe_order = mysqli_query($conn, $order);

                              
        }

        if(isset($_POST['clothes_add_to_cart1'])){
            $clothe_quantity1 = $_POST['clothe_quantity1'];
            $clothe_product1 = "Strikot";
            $price_clothes1 = 2000;

            $insert_quantity2 = "INSERT INTO purchase_record(Customer, Quantity, Item)
                                VALUE('$username', '$clothe_quantity1', '$clothe_product1')";

                                $clothe_connection1 = mysqli_query($conn, $insert_quantity2);

                                $order1 = "INSERT INTO purchase_order(Name, Address, Product, Quantity, Price)
                                VALUES('$username', '$address1', '$clothe_product1', '$clothe_quantity1', '$price_clothes1')";

                                $clothe_order = mysqli_query($conn, $order1);

                                    
        }

        if(isset($_POST['clothes_add_to_cart2'])){
            $clothe_quantity2 = $_POST['clothe_quantity2'];
            $clothe_product2 = "Alabama";
            $price_clothes3 = 2000;

            $insert_quantity3 = "INSERT INTO purchase_record(Customer, Quantity, Item)
                                VALUE('$username', '$clothe_quantity2', '$clothe_product2')";

                                $clothe_connection1 = mysqli_query($conn, $insert_quantity3);

                                $order2 = "INSERT INTO purchase_order(Name, Address, Product, Quantity, Price)
                                VALUES('$username', '$address1', '$clothe_product2', '$clothe_quantity2', '$price_clothes3')";

                                $clothe_order = mysqli_query($conn, $order2);

                                                                

                                
        }
    }


    mysqli_close($conn);


?>