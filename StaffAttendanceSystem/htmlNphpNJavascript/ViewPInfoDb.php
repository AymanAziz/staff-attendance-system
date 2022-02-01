<?php
include("connection.php");

header("refresh: 60");

if (isset($_SESSION['StaffId'])) {
   
   $StaffId =$_SESSION['StaffId'] ;

   $sqlcommand = "SELECT * FROM `staff`  WHERE (`staff`.`StaffId`='$StaffId')";

   $result = mysqli_query($connect,$sqlcommand);

   if(mysqli_num_rows($result)> 0) //if that table contain a data (1 or many data)
   {
   while($rowTable = mysqli_fetch_assoc($result)) //output in each row
   {   //therefore use <tr> <td> for output echo

      echo"<tr><td>".$rowTable["StaffId"]."</td><td>".$rowTable["StaffName"]."</td><td>".$rowTable["StaffEmail"]."</td><td>".$rowTable["StaffNo"]."</td><td>".$rowTable["StaffAge"]."</td><td>".$rowTable["StaffPasswrd"]."</td></tr>";}
   }
   
   mysqli_close($connect);
  
}
?>