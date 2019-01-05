<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet">

    <style>
    A:link    {text-decoration:none; color: black}
    A:visited {text-decoration:none; color: black}
</style>

<title>_botanica_Studio_REGISTER</title>
</head>

<body>

  <div class="container text-center">

    <h1 class="h1_login_register"><a href="../index.php" style="text-decoration: none">___botánica_Studio__&#9729;______</a></h1>

    <div class="container text-center">

        <p class="Customer_info"><b>_members_club___</b></p>

        <?
        include("../includes_partials/register_form_style.php");
        ?>

    </div>

</body>
</html>