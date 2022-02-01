<?php
require("connection.php");//take from connection.php
session_start();           //get value from other php file

if(!empty($_POST['course']))
    {
        $course  = $_POST['course'];
        $_SESSION['course'] = $course;
        header("Location: ApproveLeave.php");     
    }   

?>