<?php 
ob_start(); //This turns on output buffering

session_start();

$timezone = date_default_timezone_set("Europe/Bucharest");

$con = mysqli_connect("localhost", "root", "", "boom"); // Connection variable

if(mysqli_connect_errno())
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>