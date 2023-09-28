<?php
require_once "../db/conn.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Table</title>
    <link rel="stylesheet" href="../css/style.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    
    <table class = "content-table" >
        <thead>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Country</td>
            </tr>
        </thead>
    
    


<?php
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
    }
    
    function beginChildren() {echo "<tbody><tr>";} 

    function current() {return "<td>" . parent::current(). "</td>";}

    function endChildren() {echo "</tr></tbody>" . "\n";} 
    
}

try {

  $stmt = $conn->prepare("SELECT name, email, country FROM users ORDER BY name ASC");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>
    </table>
</body>
</html>
