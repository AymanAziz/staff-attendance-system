<?php
include("connection.php");//connect with this connection.php
session_start(); //for security and easly to parse variable from other php
if($_SERVER['REQUEST_METHOD']== 'POST')
{
    if(!empty($_POST['Date']) && !empty($_POST['Reason']))//if value is not empty
    {
        $Date     = mysqli_real_escape_string($connect,$_POST['Date']);
        $Reason   = mysqli_real_escape_string($connect,$_POST['Reason']);
        $StaffId  = $_SESSION['StaffId'];

        $sqlcheck = "SELECT `applyleave`.`StaffId`,`applyleave`.`Reason`,`applyleave`.`Date`,`staff`.`StaffName` FROM `applyleave` INNER JOIN `staff` ON `applyleave`.`StaffId` = `staff`.`StaffId`WHERE (`applyleave`.`StaffId`='$StaffId')";

        $resultcheck = mysqli_query($connect,$sqlcheck);
        $number =0;
        if(mysqli_num_rows($resultcheck)== 0) //if that table contain a data (1 or many data)
        {
            $sqlfirst ="INSERT INTO `applyleave`( `StaffId`, `Date`, `Reason`) VALUES ('$StaffId','$Date','$Reason')";
            if ($connect->query($sqlfirst) === TRUE) { echo "<script>alert('Successfully Updated '); window.location.href='\ApplyLeave.php';</script>";  } else {}
        }
        else if (mysqli_num_rows($resultcheck)> 0)
        {
            echo "<script>alert('Error. Waiting For Admin Approve your Apply leave'); window.location.href='\ApplyLeave.php';</script>";  
        }
        mysqli_close($connect);
       
     }

}

 ?>   
   
