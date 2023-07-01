<?php
   session_start();

   include("db.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
    $USER_NAME=$_POST['Username'];
    $EMAIL=$_POST['Email'];
    $PASSWORD=$_POST['Password'];
    $PHONE_NUMBER=$_POST['Phone_Number'];

            if(!empty($EMAIL) && !empty($PASSWORD) && !is_numeric($EMAIL))
            {
                $query="insert into form (Username,Email,Password,Phone_Number) values ('$USER_NAME','$EMAIL','$PASSWORD','$PHONE_NUMBER')";

                mysqli_query($con, $query);

                echo "<script type='text/javascript'>alert('Successfully registered')</script>";
            } 
            else
            {
                echo "<script type='text/javascript'>alert('Enter some valid information')</script>";
            }
        
        }       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../form/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <DIV class="quote">
        “Hurry Up folks!”<br> Dont miss out amazing collections <br>from ethical fashion brands!!
    </DIV>
    <form class="form" method="POST">
    <h2>Register Here!</h2>
    <input type="text" name="Username" placeholder="Enter your Username:">
    <input type="text" name="Email" placeholder="Enter your Email:">
    <input type="password" name="Password" placeholder="Enter your Password:">
    <input type="number" name="Phone_Number" placeholder="Enter your Phone Number:">  
    <input type="submit" name="" value="Submit">
    <p class="para">Have an account?<a href="login.php">Login Here</a></p>
    </form>
</body>
</html>