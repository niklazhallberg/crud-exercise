<div class="Login">

  <img src="../image/login.png" alt="Birds">

  <p class="error_msg"><?php

  if (isset($_GET["error"])){
   echo $_GET["error"];
 }
 ?>

</p>

<form action="login.php" method="POST">
  <p>username</p>
  <input type="text" name="username"><br><br>

  <p>password</p>
  <input type="password" name="password"><br><br>
  <input type="submit" value="Login"><br>
</form>

</div>