<?php 
    session_start();
    include('sample.php');

$username = $_SESSION['username'];
$password = $_SESSION['password'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link ref="stylesheet" href="design.css">
    <style>
        body{
            margin : 0px;
            background-color : #449342;
        }
        h1.userProfile{
            color : #3FD0C9;
            font-size : 50px;
            position : absolute;
            left : 400px;
            top : -40px;
            font-family: Arial, Helvetica, sans-serif;
        }
        form.profileDiv{
            background-color : #02353C;
            height : 600px;
            width : 1000px;
            position : relative;
            left : 200px;
            top : 60px;
            border-radius : 20px;
        }
        label.usernameLabel{
            color : #3FD0C9;
            position : absolute;
            font-size : 30px;
            font-family :Arial, Helvetica, sans-serif;
            top : 80px;
            left : 100px;
        }
        input.usernameInput{
            position : absolute;
            left : 100px;
            top : 120px;
            height : 50px;;
            width : 350px;
            font-size : 20px;
            border-radius : 20px;
        }
        label.passwordLabel{
            color : #3FD0C9;
            position : absolute;
            font-size : 30px;
            font-family :Arial, Helvetica, sans-serif;
            top : 180px;
            left : 100px;
        }
        input.passwordInput{
            position : absolute;
            left : 100px;
            top : 220px;
            height : 50px;;
            width : 350px;
            font-size : 20px;
            border-radius : 20px;
        }
        label.ageLabel{
            color : #3FD0C9;
            position : absolute;
            font-size : 30px;
            font-family :Arial, Helvetica, sans-serif;
            top : 280px;
            left : 100px;
        }
        input.ageInput{
            position : absolute;
            left : 100px;
            top : 330px;
            height : 50px;;
            width : 350px;
            font-size : 20px;
            border-radius : 20px;
        }
        label.addressLabel{
            color : #3FD0C9;
            position : absolute;
            font-size : 30px;
            font-family :Arial, Helvetica, sans-serif;
            top : 390px;
            left : 100px;
        }
        input.addressInput{
            position : absolute;
            left : 100px;
            top : 440px;
            height : 50px;;
            width : 350px;
            font-size : 20px;
            border-radius : 20px;
        }
        input.proceed{
            background-color : white;
            color : black;
            position : absolute;
            height : 50px;
            width : 120px;
            left : 850px;
            top : 200px;
            border-radius : 20px;
            font-size : 25px;   
            cursor : pointer;
        }
        input.proceed:hover{
            background-color : #02353C;
        }
        button.var{
            background-color : white;
            color : black;
            position : absolute;
            height : 50px;
            width : 120px;
            left : 1050px;
            top : 380px;
            border-radius : 20px;
            font-size : 25px;   
            cursor : pointer;
        }
        button.goto:hover{
            background-color : yellow;
        }


    </style>
</head>
<body>
    <form id="formSubmission" class="profileDiv" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h1 class="userProfile"></h1>
        <label for="username1" class="usernameLabel">Username :</label>
        <input id="username1" type="text" class="usernameInput" value="<?php echo htmlspecialchars($username) ?>" readonly name="username1" required>
        
        <label for="password1" class="passwordLabel">Password :</label>
        <input id="password1" type="text" class="passwordInput" value="<?php echo htmlspecialchars($password) ?>" readonly name="password1" require>

        <label for="age1" class="ageLabel">Age :</label>
        <input id="age1" type="text" class="ageInput" name="age1" placeholder="Enter Age" >

        <label for="address1" class="addressLabel">Address :</label>
        <input id="address1" type="text" class="addressInput" name="address1" placeholder="Enter Address" >
        <input type="submit" name="proceed" class="proceed"></input>
    </form>
        <button id="var" class="var">Go to</button>
    <script src="draft.js"></script>
</body>
</html>


<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username1 = filter_input(INPUT_POST, "username1", FILTER_SANITIZE_SPECIAL_CHARS);
    $password1 = filter_input(INPUT_POST, "password1", FILTER_SANITIZE_SPECIAL_CHARS);
    $ID1 = filter_input(INPUT_POST, "ID1", FILTER_SANITIZE_SPECIAL_CHARS);
    $age1 = filter_input(INPUT_POST, "age1", FILTER_SANITIZE_SPECIAL_CHARS);
    $address1 = filter_input(INPUT_POST, "address1", FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($username1)){
  
    }
    elseif(empty($password1)){
        echo"Please enter password";
    }
    elseif(empty($age1)){
        echo"Please enter age";
    }
    elseif(empty($address1)){
        echo"Please enter address";
    }
    else{
        $username1 = $_POST['username1'];
        $password1 = $_POST['password1'];
        $_SESSION['age1'] = $age1;
        $_SESSION['address1'] = $address1;
    
    
        $age_address_inserting = "INSERT INTO accounts(username, password, Age, Address)
                                VALUES('$username1', '$password1', '$age1', '$address1')";
    
                                $age_address_connection = mysqli_query($conn, $age_address_inserting);
                                
                                
    }

}



mysqli_close($conn);
?>