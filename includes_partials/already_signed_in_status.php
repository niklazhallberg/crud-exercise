<?php 

 ?><h1 class="h1_login_register"><a href="../index.php" style="text-decoration: none">___botánica_Studio__&#9729;______</a></h1>

    <? if (isset($_SESSION["username"])){?>
      <h3 class="h3_alert_login"><b>You're already signed in as <?= $_SESSION["username"]; ?></b></h3>
    <? 
		} 
    ?>
   