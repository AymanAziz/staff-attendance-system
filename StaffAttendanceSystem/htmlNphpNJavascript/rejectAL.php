<?php
include("connection.php");
session_start();           //get value from other php file

header("refresh: 60");

if (isset($_SESSION['course'])) {
   
    $course =$_SESSION['course'] ;
 
    //count
    $sqlcount = "SELECT * FROM `applyleave` WHERE (`applyleave`.`StaffId`='$course') ";
    $resultcountApply = mysqli_query($connect,$sqlcount);
 
    if(mysqli_num_rows($resultcountApply)== 1) //if that table contain a data (1 or many data)
    {
        while($rowTable = mysqli_fetch_assoc($resultcountApply)) //output in each row  
        { 
            $sqlDELETE = "DELETE FROM  applyleave  WHERE `applyleave`.`StaffId` ='$course' "; 
            if ($connect->query($sqlDELETE) === TRUE) {echo "<script>alert('Succesfully reject apply leave '); window.location.href='\ApproveLeave.php';</script>";;     
            } else {}         
        } 
    }else if(mysqli_num_rows($resultcountApply)== 0){echo "<script>alert('Error. That person never apply leave '); window.location.href='\ApproveLeave.php';</script>";} 
 }

?>