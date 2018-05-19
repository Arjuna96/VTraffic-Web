<?php
session_start();
unset($_SESSION['userid']);
session_unset(); 
session_destroy();
        	
header("Location: index.php");

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
?>

