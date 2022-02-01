<?php
include("connection.php");
session_start();           //get value from other php file

header("refresh: 60");

if (isset($_SESSION['course'])) {
   
    $course =$_SESSION['course'] ;
 
    $sqlcommand = "SELECT `applyleave`.`StaffId`,`applyleave`.`Reason`,`applyleave`.`Date`FROM `applyleave` WHERE (`applyleave`.`StaffId`='$course') ";
    $result = mysqli_query($connect,$sqlcommand);
    
   

    //semua nilai kt approve leave 
    $sqlcount = "SELECT COUNT(*)FROM `aprroveleave`WHERE (`aprroveleave`.`StaffId`='$course') ";
    $resultcount = mysqli_query($connect,$sqlcount);
    
     if(mysqli_num_rows($resultcount)> 0 && mysqli_num_rows($resultcount)<= 8) // ni dia buat limit sebab cuti ada 8 hari
     {   
          
         if(mysqli_num_rows($result)== 1) //if that table contain a data (1 or many data)
         {
             while($rowTable = mysqli_fetch_assoc($result)) //output in each row  
             { 
                $date   = $rowTable["Date"] ;
                $Reason = $rowTable["Reason"];


                 //save in aprroveleave table
                 $sqlINSERT ="INSERT INTO aprroveleave (StaffId, Date, Reason) VALUES ('$course','$date','$Reason')";
                    
                 if ($connect->query($sqlINSERT) === TRUE) 
                    { //DELETE VALUE IN APPLY LEAVE TABLE    
                        $sqlDELETE = "DELETE FROM  applyleave  WHERE `applyleave`.`StaffId` ='$course' "; 
                        if ($connect->query($sqlDELETE) === TRUE) {header("Location: ApproveLeave.php");     
                        } else {}
                    } 
                 
                 
                   
             } 
         }else if(mysqli_num_rows($result)== 0){echo "<script>alert('Error. That person never apply leave '); window.location.href='\ApproveLeave.php';</script>";} 
    
     mysqli_close($connect);
     
     }
     else{echo "<script>alert('Error. You Already react a limit '); window.location.href='\ApproveLeave.php';</script>";  }

     
 }

?>