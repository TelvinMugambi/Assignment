<?php
require_once "constants.php";
$Constants = new db_constants("localhost","root","");

try {
    $conn = new PDO("mysql:host={$Constants->get_server()};dbname=myDB", $Constants->get_user(), $Constants->get_pass());
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }