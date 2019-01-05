<?php

session_start();

/* IF USER IS NOT SIGNED IN */

if (!isset($_SESSION["username"])){
  header('Location:../index.php?error_sign_in=<b>Please login</b>');
}

/* CONNECT WITH DATABASE */

include("../includes_partials/database_connection.php"); 

/* IF USER IS HAS SELECTED AN AMOUNT OF PRODUCT - AND IS SIGNED IN - THEN STORE IN DATABASE */

if ($_POST["product_amount"] >= 1){

  if (isset($_SESSION["username"])){

    $statement = $pdo->prepare("INSERT INTO Order_table (user_id, product_id, product_amount) VALUES (:user_id, :product_ident, :product_amount)"); 

    $statement->execute([
      ":user_id" => (int)$_SESSION["user_id"],
      ":product_ident" => (int)$_POST["product_ident"],
      ":product_amount" => (int)$_POST["product_amount"]
    ]);

    header('Location: ../index.php');

  }  
} else {
  header('Location:../index.php?error_amount=<b>Invalid amount, choose at least 1 item!</b>');
}

?>