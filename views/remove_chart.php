<?php

session_start();

/* MESSEGE TO USER - IF NOT SIGNED IN - AND TRY TO ORDER */

if (!isset($_SESSION["username"])){
	header('Location:../index.php?error_sign_in=<b>Please login to remove/add items.</b>');
}

/* CONNECT WITH DATABASE */

include("../includes_partials/database_connection.php"); 

$statement = $pdo->prepare("DELETE FROM Order_table WHERE product_id = :product_ident AND user_id = :user_id");
$statement->execute([
	":product_ident" => (int)$_POST["product_ident"],
	":user_id" => (int)$_SESSION["user_id"]
]);


header('Location: ../index.php');