<?php
    //nclude("header.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signup.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="all">

    <img src="images\pexels-pixabay-247431.jpg." alt="Profile Picture" class="picture">
    <div class="container">
        <div class="heading">
            Sign Up
        </div>
        
        <div class="form_fill">
            <form action="" method ="post">

            
            <input type="text" id="name" name="name" placeholder="name"><br><br>

            
            <input type="email" id="email" name="email" placeholder="E-Mail"><br><br>

            
            <input type="password" id="password" name="password" placeholder="Password">
            <p>Minimum of 8 characters</p>

            
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password"><br><br>

            
            <input type="text" id="vehicle" name="vehicle" placeholder="Vehicle no."><br><br>

            
            <input type="text" id="ID" name="ID" placeholder="ID no."><br><br>

            
            <input type="text" id="licence" name="licence" placeholder="Licence no."><br><br>

            
            <input type="number" id="contact" name="contact" placeholder="Contact no."><br><br>

            <button type="submit" class="signup_btn">Sign Up</button><br><br>

            have an account?<a href="#"> Sign In</a>
            </form>
        </div>
    </div>
</div>
<hr>
</body>
</html>
<?php
    include("footer.php")
?>