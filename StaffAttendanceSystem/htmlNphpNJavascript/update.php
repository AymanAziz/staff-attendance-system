<?php
include("connection.php");
session_start();


//$_SERVER['REQUEST_METHOD'] => Returns the request method used to access the page (such as POST
if($_SERVER['REQUEST_METHOD']== 'POST')
{
    //check username n pasword is empty or not
    //if !empty => add security to prevent sql injection

    if(!empty($_POST['StaffName']) && !empty($_POST['StaffEmail']) && !empty($_POST['StaffNo'])&& !empty($_POST['StaffAge'])&& !empty($_POST['StaffPasswrd']))
    {
       $StaffName    = mysqli_real_escape_string($connect,$_POST['StaffName']);//security for prevent sql injection
       $StaffPasswrd = mysqli_real_escape_string($connect,$_POST['StaffPasswrd']);
       $StaffEmail   = mysqli_real_escape_string($connect,$_POST['StaffEmail']);
       $StaffNo      = mysqli_real_escape_string($connect,$_POST['StaffNo']);
       $StaffAge     = mysqli_real_escape_string($connect,$_POST['StaffAge']);
       $StaffId      =$_SESSION['StaffId'] ;     
    
        $sqlcommand = "UPDATE staff SET StaffName = '$StaffName', StaffPasswrd= '$StaffPasswrd',StaffEmail='$StaffEmail',StaffNo='$StaffNo',StaffAge='$StaffAge' WHERE StaffId ='$StaffId'";
        
        if (mysqli_query($connect, $sqlcommand)) { echo "<script>alert('Successfully Updated '); window.location.href='\main.php';</script>";  } else {
          echo "<script>alert('Error. Please try again '); window.location.href='\main.php';</script>";  
      }
    }
  }
?>
   

