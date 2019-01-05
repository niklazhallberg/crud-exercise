<?php

$statement = $pdo->prepare("SELECT * FROM reg_info_users 
  JOIN users ON reg_info_users.user_id = users.user_id WHERE users.username = :username");

$statement->execute( 
  [
    ":username" => $_SESSION["username"]

  ]

);

$users = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($users as $user): ?>

  <div class="col-12 flower_box">

   <p><?= $user["new_user_first_name"]; ?></p>
   <p><?= $user["new_user_last_name"]; ?></p>
   <p><?= $user["new_user_adress"]; ?></p>
   <p><?= $user["new_user_zipcode"]; ?></p>
   <p><?= $user["new_user_phone"]; ?></p>
   <p><?= $user["new_user_mail"]; ?></p>

 </div>

 <?php endforeach; ?>