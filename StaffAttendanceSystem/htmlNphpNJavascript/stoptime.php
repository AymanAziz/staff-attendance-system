<?php
include("connection.php");//connect with this connection.php
session_start(); //for security and easly to parse variable from other php
$StaffId  = $_SESSION['StaffId'];//from login.php
      

$sqlexists = "SELECT * FROM `attendance` WHERE (`attendance`.`StaffId`= '$StaffId' and Date(`attendance`.`Date`)=CURRENT_DATE())"; 
$resultexists = mysqli_query($connect,$sqlexists);

if(mysqli_num_rows($resultexists)== 1) //if table listcourse de data 1 atau lebih
{ 
  $sqlcommand = "UPDATE attendance SET SignoutTime = NOW() WHERE AttendanceId='".$_SESSION['primarykey']."' AND StaffId = '".$_SESSION['StaffId']."'";
     
  if (mysqli_query($connect, $sqlcommand)) {
    echo "<script>alert('Successfully Checked out '); window.location.href='\main.php';</script>";
  } 
} 
else{
  echo "<script>alert('1 attempt only day'); window.location.href='\main.php';</script>";
  exit();
  mysqli_close($connect);

  }

  

    
 ?>   
   