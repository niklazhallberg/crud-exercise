<?php

/* CONNECT WITH DATABASE */

include("../includes_partials/database_connection.php");

$username = $_POST["username"];
$password = $_POST["password"];
$firstName = $_POST["firstName"];
$lastName =  $_POST["lastName"];
$Adress =  $_POST["Adress"];
$ZipCode =  $_POST["ZipCode"];
$Phone =  $_POST["Phone"];
$Mail =  $_POST["Mail"];


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$statement = $pdo->prepare("INSERT INTO reg_info_users(new_user_first_name, new_user_last_name, new_user_adress, new_user_zipcode, new_user_phone, new_user_mail)
	VALUES (:firstName, :lastName, :Adress, :ZipCode, :Phone, :Mail)");

$statement->execute([
  ":firstName" => $firstName,
  ":lastName"  => $lastName,
  ":Adress" => $Adress,
  ":ZipCode"   => $ZipCode,
  ":Phone" => $Phone,
  ":Mail"   => $Mail,
]);


$statement = $pdo->prepare("INSERT INTO users
  (username, password) VALUES (:username, :password)");


$statement->execute(
  [
    ":username" => $username,
    ":password" => $hashed_password
  ]
);

header('Location: ../index.php');