<?php
session_start();

/* CONNECT WITH DATABASE */

include("../includes_partials/database_connection.php"); 

$username = $_POST["username"];
$password = $_POST["password"];

$statement = $pdo->prepare("SELECT * FROM users
  WHERE username = :username");

$statement->execute(
  [
    ":username" => $username
  ]
);

$fetched_user = $statement->fetch();

$is_password_correct = password_verify($password, $fetched_user["password"]);

if($is_password_correct){

  $_SESSION["username"] = $fetched_user["username"];
  $_SESSION["user_id"] = $fetched_user["user_id"];
  
  header('Location: ../index.php');
} else {
  header('Location: login_interface.php?error=<b>Your username or password is incorrect</b>');
}