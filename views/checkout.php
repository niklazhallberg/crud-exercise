<?php
session_start();

if (!isset($_SESSION["username"])){
  header('Location:../index.php?error_sign_in=<b>Please login in before checkout :)</b>');
}
?> 

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

    <?
    include("../includes_partials/sign_in_status_checkout.php");
    ?>

    <div class="container text-center">

      <div class="row" role="region">

        <div class="col-12 information_box">


          <!-- PRESENTATION OF USER BILLING INFO -->


          <h1 class="h1_checkout"><a href="../index.php" style="text-decoration: none">___botánica_Studio__&#9729;______</a></h1>
          <p class="personal_box">Personal info and billing adress</p>

          <?

          /* CONNECT WITH DATABASE */

          include("../includes_partials/database_connection.php"); 

          include("../includes_partials/database_foreach_user_info.php"); 

          ?>

          <div class="col-12 choice_of_prints">

            <!-- PRESENTATION OF SIGNED IN USER CHOICE OF PRINTS AND TOTAL COST -->

            <p class="choice_text"> Your choice of prints: </p>  

            <? 
            
            include("../includes_partials/database_foreach_users_chosen_products.php");

            include("../includes_partials/chosen_products_and_total_cost.php");

            ?>

            <form class="form3" action="confirm.php" method="POST">
              <input type="submit" value="Confirm order">


            </div> <!-- END DIV for choice_of_prints -->

          </div> <!-- END DIV for information_box -->

        </div> <!-- END DIV for row -->

      </div> <!-- END DIV for CONTAINER -->

      <div class="purple_footer"></div>

    </body>

    </html>