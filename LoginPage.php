<?php 

    session_start();

    include('sample.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="draftDesign.css">
    <style>
        img.loginbackground{
            height : 729px;
            width : 700px; 
            opacity : 0.1;
        }
    </style>
</head>
<body>
    <div class="imageDiv">
        <img class="loginbackground" src="assets/scale.jpg" alt="error"></img>
    </div>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" class="userForm" method="post">

        <label class="username">Username</label> <br> 
        <input class="Username" type="text" name="username"> <br>
        <label class="password">Pssword</label>
        <input class="Password" type="password" name="password"> <br>
        <input class="Register" type="submit" name="submit" value="Enter">
        
    </form>
    <script src="draft.js"></script>
</body>
</html>

<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);


        if(empty($username)){
            echo"Please enter username";
        }
        elseif(empty($password)){
            echo"Please enter password";
        }
        else{

            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;


            header("Location: profile.php");
        }
    }

    mysqli_close($conn);

?>