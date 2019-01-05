<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet">


  <title>_botanica_Studio_HELLO</title>

</head>

<body>    

  <!-- HTML interface for index.php STARTS HERE -->

  <div class="header text-center">
    <br>

    <!-- CUSTOMER SIGN IN STATUS SHOWS ON TOP OF PAGE --> 

    <?
    include("includes_partials/sign_in_status.php");
    ?>

    <h1>___botánica_Studio__&#9729;______</h1>

    <div class="container text-center">

      <?php

      /* POSSIBLE USER ERROR MSG */ 

      include("includes_partials/customer_errors.php");

      /* NAV BAR */ 

      include("includes_partials/navigation.php"); 

      ?>

      <div class="row" role="region">

        <?php

        /* CONNECT WITH DATABASE */

        include("includes_partials/database_connection.php"); 

        /* LOOP PRODUCTS FROM DATABASE with associated ADD / DELETE -item buttons */

        include("includes_partials/index_fetch_all.php"); 

        include("includes_partials/index_foreach_products.php"); 

        ?>

      </div>

    </div> <!-- CONTAINER STOPS HERE -->

    <div class="purple_footer text-center">
     <form class="form3" action="views/checkout.php" method="POST">
       <input type="submit" value="Go to checkout">
     </form>

   </div>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 </body>

 </html>