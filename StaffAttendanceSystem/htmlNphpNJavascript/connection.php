<?php
//connect with database
//information from phpmyadmin --> privileges or user accounts
$servername   = "localhost";
$username     = "root";
$password     = "";
$databasename = "staffattendancesystem";

//create connection with database
$connect =  mysqli_connect($servername,$username,$password,$databasename);

if(!$connect) //if not connect with database
{
   die('ERROR:'.mysqli_connect_error()); //show error message
}
?>
