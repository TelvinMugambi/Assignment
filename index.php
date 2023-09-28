<?php
class home{
    public function form(){

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class = "signup-box">
        <form action="process/signup_process.php" method="POST">
            <h1>WELCOME</h1>
            <label for="">Name</label>
            <input type="text" name="fullname" id="fullname"placeholder = "Enter your name">
            <label for="">Email</label>
            <input type="email" name="email" id="email"placeholder = "Enter your email address">
            <label for="">Password</label>
            <input type="password" name="password" id="password"placeholder = "Enter your password">
            <label for=""> Confirm Password</label>
            <input type="password" name="c_password" id="c_password"placeholder = "Repeat password">
            <label for="">Country</label>
            <input type="text" name="country" id="country"placeholder = "Type in your country">
            <input type="submit" name = "signup" value="Sign Up">
        </form>    
        <p>
        By clicking the Sign Up button,you agree to our <br />
            <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy
        </p>
    </div>        
        
</body>
</html>
<?php
    }
}
$Home = new home();
$Home->form();
?>