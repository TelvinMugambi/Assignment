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
</head>
<body>
    
    Name <input type="text" name="fullname" id="fullname"><br><br>
    Email <input type="email" name="email" id="email"><br><br>
    Password <input type="password" name="password" id="password"><br><br>
    Confirm Password <input type="password" name="c_password" id="c_password"><br><br>
    Country <select name="country" id="country">
        <?php
        $countries = array("Kenya","Uganda","Tanzania");
        foreach($countries as $country){
            
        ?>
        <option value="<?php echo "{$country}"?>"><?php echo "{$country}"?></option>
        <?php
        }
        ?>
    </select><br><br>
    <input type="submit" value="Sign Up">

</body>
</html>
<?php
    }
}
$Home = new home();
$Home->form();
?>