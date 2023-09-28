<?php
require_once "../db/conn.php";

if(isset($_POST["signup"])){
    try{
        $name = ucwords(strtolower($_POST["fullname"]));
        $email = strtolower($_POST["email"]);
        $password = $_POST["password"];
        $c_password = $_POST["c_password"];
        $country = $_POST["country"];
    
        if(!strcmp($password, $c_password) == 0){
        die("Error: passwords do not match");
        }   

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            die("Error: Invalid email");
        } 

        $en_password = password_hash($c_password,PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users(name, email, password, country) VALUES (:name, :email, :en_password, :country)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':en_password', $en_password, PDO::PARAM_STR);
        $stmt->bindParam(':country', $country, PDO::PARAM_STR);

        if($stmt->execute()){
            header("Location: ../viewusers.php");
            exit();
        }else{
            echo "Error in the Query";
        }
    }catch(PDOException $e){
        echo "Error: " .$e->getMessage();
    }
        
}