<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP practice</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Allura&family=Inter:ital,opsz,wght@0,14..32,200;1,14..32,200&display=swap");
    </style>
</head>

<body>
    <div class="formclass">
        <h1>Login</h1>
        <form action="index.php" method="post">
            <label for="">email</label><br>
            <input class="txtfield" type="text" name="email"><br>
            <label for="">Password</label><br>
            <input class="txtfield" type="text" name="password"><br>
            <input class="button" type="submit" name="button" value="Submit">
        </form>
    </div>
    <div class="phpdiv">
        <h1>This Contains my php</h1>
        <?php
        if(empty($_POST["email"]) || empty($_POST["password"])) { 
          
            echo "Please Input Username And Password"; 
        } else {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
            if(empty($email)){
                echo "Email is Not Valid";
            }else{
                $_SESSION["email"] = $email;
                $_SESSION["password"] = password_hash($password, PASSWORD_DEFAULT);
                header("location: homepage.php");
               echo"Email And Pass has been sent to the other page please check!";
            }
        }
?>
    </div>
</body>

</html>