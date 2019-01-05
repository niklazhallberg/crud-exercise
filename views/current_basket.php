<?php
session_start();

if (!isset($_SESSION["username"])){
  header('Location:../index.php?error_sign_in=<b>Please login in before checkout :)</b>');
}

?> 

<!-- HTML CODE for CHECKOUT.php starts here --> 

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet">

  <title>_botanica_Studio_CHECKOUT</title>

</head>

<body>
  <div class="header text-center">
    <br>

    <? if (isset($_SESSION["username"])){?>
      <h3 class="h3_login"><b>Signed in as <?= $_SESSION["username"]; ?></b></h3> 
      <h3 class="h3_login"><b><a href="logout.php" style="text-decoration: none">Logout</a></b></h3>

    </div>

    <? 
  } 
  ?>

  <div class="container text-center">

    <div class="row" role="region">

       <p class="choice_text"> Your choice of prints: </p>   

        <?       

        $statement = $pdo->prepare("SELECT product_name, product_price, product_amount FROM Order_table
          JOIN products 
          ON Order_table.product_id = products.product_id 
          JOIN users 
          ON users.user_id = Order_table.user_id
          WHERE users.username = :username");

        $statement->execute( 
          [
            ":username" => $_SESSION["username"]
          ]
        );

        $products = $statement->fetchAll(PDO::FETCH_ASSOC);

        $TotalSum = 0;

        foreach($products as $product): ?>

          <div class="col-12 flower_box">

           <p><?= $product["product_name"]; ?></p>
           <p><?= $product["product_price"]; ?> sek / pcs</p>
           <p><?= $product["product_amount"]; ?> pcs</p><br>

           <? $TotalSum = $TotalSum + (($product["product_price"]) * ($product["product_amount"])); ?>

         </div>

         <?php endforeach; ?>

          <p class="total_sum_text"><b>&#x219D; Total Sum: </b></p><p><?= $TotalSum ?> sek</p>
