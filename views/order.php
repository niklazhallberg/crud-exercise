<?php
session_start();

?>

<?php 
                  $pdo = new PDO(
                  "mysql:host=localhost;dbname=Crud;charset=utf8",
                  "root",
                  "root"
          );
 ?>

 <?

 //Prepare a SQL-statement
          $statement = $pdo->prepare("SELECT * FROM products");
          //Execute it
          $statement->execute();
          //And fetch every row that it returns. $products is now an Associative array
          $products = $statement->fetchAll(PDO::FETCH_ASSOC);
                     
?>



 <?

foreach($products as $product){
//Same value in both $_POST["username"] and $username
$product_name = $products["product_name"];
$product_price = $products["product_price"];
$product_amount = ($_POST[$prod["product_name"]]);
};

$statement = $pdo->prepare("INSERT INTO Order_table
 (product_name, product_price, product_amount) VALUES (:product_name, :product_price, :product_amount)");
// Execute populates the statement and runs it
$statement->execute(
 [
   ":Title" => $product_name,
   ":Price" => $product_price,
   ":Amount" => $product_amount
 ]
);
header('Location: checkout.php');



?>