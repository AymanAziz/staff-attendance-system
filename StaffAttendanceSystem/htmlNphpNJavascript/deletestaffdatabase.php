<?php
require("connection.php");//take from connection.php
session_start();           //get value from other php file

if(!empty($_POST['course']))
    {
        $course  = $_POST['course'];
        
        $sqlcommand = "DELETE FROM  staff  WHERE `staff`.`StaffId` ='$course' ";
        
        if ($connect->query($sqlcommand) === TRUE) {
           echo "<script>alert('Successfully Delete '); window.location.href='\DeleteStaff.php';</script>";
          } else {
            echo "Error deleting record: " . $connect->error;
            echo "<script>alert('Delete Fail.Please Try again'); window.location.href='\DeleteStaff.php';</script>";
          }
        
    }   

?>
