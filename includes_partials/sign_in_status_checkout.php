<?php

    if (isset($_SESSION["username"])){?>
      <h3 class="h3_login_signedin"><b>Signed in as <?= $_SESSION["username"]; ?></b></h3> 
      <h3 class="h3_login"><b><a href="logout.php" style="text-decoration: none">Logout</a></b></h3>
    </div>
    <? 
  } 
  ?>