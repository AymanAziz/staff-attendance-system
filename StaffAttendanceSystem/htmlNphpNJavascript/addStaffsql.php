<?php
include("connection.php");
session_start();


//$_SERVER['REQUEST_METHOD'] => Returns the request method used to access the page (such as POST
if($_SERVER['REQUEST_METHOD']== 'POST')
{
    //check username n pasword is empty or not
    //if !empty => add security to prevent sql injection

    if(!empty($_POST['StaffId']) && !empty($_POST['StaffName']) && !empty($_POST['StaffEmail']) && !empty($_POST['StaffNo'])&& !empty($_POST['StaffAge'])&& !empty($_POST['StaffPasswrd']))
    {
       $StaffName    = mysqli_real_escape_string($connect,$_POST['StaffName']);//security for prevent sql injection
       $StaffPasswrd = mysqli_real_escape_string($connect,$_POST['StaffPasswrd']);
       $StaffEmail   = mysqli_real_escape_string($connect,$_POST['StaffEmail']);
       $StaffNo      = mysqli_real_escape_string($connect,$_POST['StaffNo']);
       $StaffAge     = mysqli_real_escape_string($connect,$_POST['StaffAge']);
       $StaffId     = mysqli_real_escape_string($connect,$_POST['StaffId']);
    
        $sqlcommand = "INSERT INTO  staff (StaffId,StaffPasswrd,StaffName,StaffEmail,StaffNo,StaffAge) VALUES ('$StaffId','$StaffPasswrd','$StaffName','$StaffEmail','$StaffNo','$StaffAge')";
        
        if ($connect->query($sqlcommand) === TRUE) {echo "<script>alert('Successfully insert'); window.location.href='\addStaff.php';</script>";} else {
            echo "Error updating record: " . $connect->error;
        }
    }
}
?>
   