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
        <a href="index.php"> Link to Index Page</a>
        <form action="homepage.php" method="post">
            <input type="submit" name="logout" value="Logout">
        </form>
        <form action="homepage.php" method="post">
            <input type="text" name="verifypass">
            <button type="submit" name="verifybtn"> Verify </button>
        </form>
    </div>

    <div class="phpdiv">
        <h1>Welcome to Home Page</h1>
        <?php
        echo $_SESSION["email"] . "<br>";
        echo $_SESSION["password"] ."<br>";

        if(isset($_POST["logout"])){
            session_destroy();
            header("location: index.php");
        }

        if(isset($_POST["verifybtn"])){
            if(!empty($_POST["verifypass"])){

            if(password_verify($_POST["verifypass"], $_SESSION["password"])){
                echo"Password Correct!";
            }else{
                echo "Password Incorrect";
            }
        }
        else{
            echo "Please Input Password";
        }
        }
    ?>
    </div>
</body>

</html>