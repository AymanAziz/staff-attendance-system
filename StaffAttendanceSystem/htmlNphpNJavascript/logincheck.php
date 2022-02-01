<?php
include("connection.php");
session_start();


//$_SERVER['REQUEST_METHOD'] => Returns the request method used to access the page (such as POST
if($_SERVER['REQUEST_METHOD']== 'POST')
{
    //check username n pasword is empty or not
    //if !empty => add security to prevent sql injection

    if(!empty($_POST['StaffId']) && !empty($_POST['StaffPasswrd']))
    {
       $StaffId = mysqli_real_escape_string($connect,$_POST['StaffId']);//security for prevent sql injection
       $StaffPasswrd   = mysqli_real_escape_string($connect,$_POST['StaffPasswrd']);
       $_SESSION['StaffId'] = $StaffId;
    }
    else
    {   
        $StaffId            = FALSE;
        $StaffPasswrd       = FALSE;
        echo "<script>alert('Please enter username and password'); window.location.href='\login.php';</script>";

    }

     if($StaffId && $StaffPasswrd)
     {  
         $sql      ="SELECT StaffId , StaffPasswrd FROM staff WHERE (StaffId = '$StaffId' AND StaffPasswrd ='$StaffPasswrd')";
         $sqladmin ="SELECT AdminId, AdminPasswrd FROM  admin WHERE (AdminId = '$StaffId' AND AdminPasswrd ='$StaffPasswrd')";
         //run the query and assign it to the variable $result
         $result =mysqli_query($connect,$sql);
         $resultadmin =mysqli_query($connect,$sqladmin);
         if(@mysqli_num_rows($result)== 1)//if that data found is 1 and only 1 match
         {  
            $_SESSION['StaffId'] = $StaffId;//parse that information to antoher frame
            header("Location: main.php");
 
            exit();
			mysqli_free_result($result);
			mysqli_close($connect);

         }
         else{
             //external php + alert
            echo "<script>alert('You enter a wrong username or password'); window.location.href='\login.php';</script>";
            
         }
         if(@mysqli_num_rows($resultadmin)== 1)//if that data found is 1 and only 1 match
         {  
            header("Location: adminmain.php");
 
            exit();
			mysqli_free_result($result);
			mysqli_close($connect);

         }
         else{
             //external php + alert
            echo "<script>alert('You enter a wrong password'); window.location.href='\login.php';</script>";
           
         }
     }else{ echo "<script>alert('You need to enter username and password'); window.location.href='\login.php';</script>";}
     mysqli_close($connect); 
}
?>
   

