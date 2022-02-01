<?php
include("connection.php");//connect with this connection.php
 
       
        //header("refresh: 60");
     
        $sqlinnerjoin = "SELECT `attendance`.`AttendanceId`,`attendance`.`Date`,`staff`.`StaffName` FROM `attendance` INNER JOIN `staff` ON `attendance`.`StaffId` = `staff`.`StaffId` WHERE Date(`attendance`.`Date`)=CURRENT_DATE() AND `attendance`.`SigninTime`IS NOT NULL AND`attendance`.`SignoutTime` IS NULL";
        $resultinnerjoin = mysqli_query($connect,$sqlinnerjoin);
    
        if(mysqli_num_rows($resultinnerjoin)> 0) //if table listcourse de data 1 atau lebih
        {
            while($rowinnerjoin = mysqli_fetch_assoc($resultinnerjoin)) //output in each row
            { echo"<tr><td>".$rowinnerjoin["StaffName"]."</td><td>Online</td></tr>";}
        }     
      mysqli_close($connect);
    
    
    


