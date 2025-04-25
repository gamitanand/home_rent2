<?php 

session_start();

if(!isset($_SESSION["islogin"]))
{
	header("location:index.php");
}

include 'connection.php';
?>