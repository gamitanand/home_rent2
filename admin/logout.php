<?php 

session_start();

unset($_SESSION["islogin"]);

header("location:index.php");

?>