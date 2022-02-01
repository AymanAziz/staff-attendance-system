<?php
include("connection.php");//connect with this connection.php
        header("refresh: 60");
        $StaffId = $_SESSION['StaffId'] ;
        $sqlinnerjoin = "SELECT `attendance`.`AttendanceId`,`attendance`.`SigninTime`,`attendance`.`SignoutTime`,`attendance`.`Date`,`staff`.`StaffName` FROM `attendance` INNER JOIN `staff` ON `attendance`.`StaffId` = `staff`.`StaffId` WHERE `attendance`.`StaffId`='$StaffId' ORDER BY `attendance`.`Date` DESC  ";
        $resultinnerjoin = mysqli_query($connect,$sqlinnerjoin);
    
        if(mysqli_num_rows($resultinnerjoin)> 0) //if table listcourse de data 1 atau lebih
        {
            while($rowinnerjoin = mysqli_fetch_assoc($resultinnerjoin)) //output in each row
            { echo"<tr typecolor=rgb(32, 215, 228) ><td>".$rowinnerjoin["StaffName"]."</td><td>Check in:".$rowinnerjoin["SigninTime"]."</td><td>Check out:".$rowinnerjoin["SignoutTime"]."</td></tr>";}
        } 
        mysqli_close($connect);
  
