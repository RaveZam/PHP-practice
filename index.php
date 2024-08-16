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
        <h1>This Contains my Login Section</h1>
        <form action="index.php" method="post">
            <label>Username</label><br>
            <input class="txtfield" type="text" name="username"><br>
            <label>Password</label><br>
            <input class="txtfield" type="text" name="password"><br>
            <input class="button" type="submit" value="Login">
        </form>
    </div>
    <div class="calculatediv">
        <form action="index.php" method="post">
            <h1>Item Calculator</h1>
            <label>Item Name</label><br>
            <input class="txtfield" type="text" name="item_name"><br>
            <label>Item Price</label><br>
            <input class="txtfield" type="text" name="item_price"><br>
            <label>Item Quantity</label><br>
            <input class="txtfield" type="text" name="item_qty"><br>
            <input class="button" type="submit" value="Submit">
        </form>

    </div>
    <div class="phpdiv">
        <h1>This Contains my php</h1>
        <?php

        // Basic Declaring of Variables
        
        $name = "Raven"; 
        $age = 21;
        $hobby = "Guitar";
        $item = "Laptop";
        $cost = 50000;

   echo "Your name is {$name}<br>";
   echo "You are  {$age} Years Old<br>";
   echo "You Like playing the  {$hobby} <br>";
   echo "You are purchasing a {$item} <br>";
   echo "That Costs around P{$cost}<br>";

           //Cart simulation

   $qty = 10;
   $item_name = "pizza";
   $price = 10;
   $total = $qty * $price;

   echo"You have bought {$qty} x  {$item_name}, Each {$item_name} costs around \${$price}, in total that is {$total} <br><br>";

   // Username And Password Test

   $username = $_POST["username"];
   $password = $_POST["password"];
   
   echo "Here is my Username And Password <br>";
   echo "{$username} <br>";
   echo "{$password} <br>";
   
    // Here is the items section where it shows all the data from the form and the total below
   

   $item_name = $_POST["item_name"];
   $item_price = $_POST["item_price"];
   $item_qty = $_POST["item_qty"];
   $totalprice = $item_qty * $item_price;


   echo "Here is the list of item and the total at the bottom <br>";
   echo "You have bought {$item_qty}x of {$item_name}, each costing {$item_price}, in total in will be {$totalprice}"
?>
    </div>
</body>

</html>