<?php
require_once "../db/conn.php";

if(isset($_POST["signup"])){
    try{
        $name = ucwords(strtolower($_POST["fullname"]));
        $email = strtolower($_POST["email"]);
        $password = $_POST["password"];
        $c_password = $_POST["c_password"];
        $country = $_POST["country"];

        
        $sql = "INSERT INTO users(name, email, password, country) VALUES (:name, :email, :password, :country)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
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
        // $stmt = $pdo->prepare($sql);
        // $pdo->execute($data);
    

    
}