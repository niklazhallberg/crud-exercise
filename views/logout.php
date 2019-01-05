<?php

session_start();

/* SHUT DOWN CUSTOMER SIGNED-IN SESSION */ 

session_destroy();

header ('Location: ../index.php');

?>
