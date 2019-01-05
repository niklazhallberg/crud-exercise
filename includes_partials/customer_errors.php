<p class="error_msg">

<?

/* Customer must be logged in to process to checkout */ 

if(isset($_GET["error_sign_in"])){
	echo $_GET["error_sign_in"];
}

/* User must choose at least 1 amount of item to add, 0 is not an option */ 

if(isset($_GET["error_amount"])){
	echo $_GET["error_amount"];
}

?>

