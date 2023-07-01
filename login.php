<?php
   session_start();

   include("db.php");
   
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
    $EMAIL=$_POST['Email'];
    $PASSWORD=$_POST['Password'];

    if(!empty($EMAIL) && !empty($PASSWORD) && !is_numeric($EMAIL))
    {
        $query="select * from form where Email='$EMAIL' limit 1";
        $result=mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result)>0){
                $user_data=mysqli_fetch_assoc($result);

                if($user_data['Password']== $PASSWORD )
                {
                    header("location:index.html");
                    die;
                }
            }
        }
        echo "<script type='text/javascript'>alert('Wrong Mail and password')</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('Wrong Mail and password')</script>";
    
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body> 
    <DIV class="quote">
        “Fashion is not just about creating beautiful clothes,<br> it’s about creating a better world.”
    </DIV>
</div>
<div>
    <form class="form" method="POST">
   <h2>Login Here</h2>
   <input type="text" name="Email" placeholder="Enter your email:">
   <input type="password" name="Password" placeholder="Enter your password:">
   <input  type="submit" name="" value="Submit">
   <p class="link">Dont have an Account?<br>
    <a class="sn" href="signup.php">Sign Up</a></p>
   <p class="liw">Login with:</p>
   <div class="icons">
       <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
       <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
       <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
       <a href="#"><ion-icon name="logo-google"></ion-icon></a>
       <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
   </div>
</form>
   
</div>

</body>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</html>