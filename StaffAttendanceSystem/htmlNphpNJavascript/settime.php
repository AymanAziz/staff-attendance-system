<?php
include("connection.php");//connect with this connection.php
session_start(); //for security and easly to parse variable from other php

   $StaffId  = $_SESSION['StaffId'];//from login.php
      

   $sqlexists = "SELECT * FROM `attendance` WHERE (`attendance`.`StaffId`= '$StaffId' and Date(`attendance`.`Date`)=CURRENT_DATE())"; 
   $resultexists = mysqli_query($connect,$sqlexists);

   if(mysqli_num_rows($resultexists)== 1) //if table listcourse de data 1 atau lebih
   {   echo "<script>alert('1 attempt only day'); window.location.href='\main.php';</script>";
      exit();
      mysqli_close($connect);
   } 
   else
   {  
      $name= $StaffId;
      $date = date('Y-m-d');
      $primarykey = $StaffId . '' .$date;  

      $sqlfirst ="INSERT INTO attendance (AttendanceId, StaffId, SigninTime, Date) VALUES ('$primarykey','$StaffId',NOW(),NOW())";
      
      $_SESSION['Date'] = $date;
      $_SESSION['primarykey'] = $primarykey; //storing data
      
      //if connectionis succesful it will directly to second.php 
      //else it will show error
      if ($connect->query($sqlfirst) === TRUE) {  echo "<script>alert('Successfully Checked in '); window.location.href='\main.php';</script>";} 
       
   }












     


    

 ?>   
   