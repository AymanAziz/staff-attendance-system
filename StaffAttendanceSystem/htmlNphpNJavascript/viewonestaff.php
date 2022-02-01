<?php
include("connection.php");

if(!empty($_POST['check']) )//if value is not empty
{

 $checkStaffId   = $_POST['check'];


$sqlcommand = "SELECT `staff`.`StaffName`,`staff`.`StaffId`,`staff`.`StaffEmail`,`staff`.`StaffNo`,`staff`.`StaffAge`FROM staff WHERE (`staff`.`StaffId`='$checkStaffId')";

$result = mysqli_query($connect,$sqlcommand);

if(mysqli_num_rows($result)> 0) //if that table contain a data (1 or many data)
{
 while($rowTable = mysqli_fetch_assoc($result)) //output in each row
    //show all result but i want in table form
 {   //therefore use <tr> <td> for output echo
    $_SESSION['StaffId'] = $checkStaffId;//parse that information to antoher frame
    echo"<tr><td>$number</td><td>".$rowTable["StaffName"]."</td><td>".$rowTable["StaffEmail"]."</td><td>".$rowTable["StaffNo"]."</td><td>".$rowTable["StaffAge"]."</td></tr>";}
 }
 

  mysqli_close($connect);
}
?>