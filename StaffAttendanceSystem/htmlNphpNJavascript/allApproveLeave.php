<?php
include("connection.php");

header("refresh: 60");

if (isset($_SESSION['course'])) {
   
   $course =$_SESSION['course'] ;

   $sqlcommand = "SELECT `applyleave`.`StaffId`,`applyleave`.`Reason`,`applyleave`.`Date`,`staff`.`StaffName` FROM `applyleave` INNER JOIN `staff` ON `applyleave`.`StaffId` = `staff`.`StaffId`WHERE (`applyleave`.`StaffId`='$course')";

   $result = mysqli_query($connect,$sqlcommand);
   $number =0;
   if(mysqli_num_rows($result)> 0) //if that table contain a data (1 or many data)
   {
   while($rowTable = mysqli_fetch_assoc($result)) //output in each row
      //show all result but i want in table form
   {   //therefore use <tr> <td> for output echo
      $number =$number+1;
      echo"<tr><td>$number</td><td>".$rowTable["StaffName"]."</td><td>".$rowTable["Date"]."</td><td>".$rowTable["Reason"]."</td></tr>";}
   }
   
   mysqli_close($connect);
  
}
?>