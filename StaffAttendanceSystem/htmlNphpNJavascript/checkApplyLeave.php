<?php
include("connection.php");
session_start();
//sql to show all dropbox from html


$sqlcommand = "SELECT `staff`.`StaffId`,`staff`.`StaffName` FROM `staff` ";

$result = mysqli_query($connect,$sqlcommand);

if(mysqli_num_rows($result)> 0) //if that table contain a data (1 or many data)
{
 while($rowTable = mysqli_fetch_assoc($result)) //output in each row
      //show all result but i want in table form
 {   //therefore use <tr> <td> for output echo
    
     echo" <option value=".$rowTable["StaffId"].">".$rowTable["StaffName"]."</option>";
 }
 
}
  mysqli_close($connect);

?>