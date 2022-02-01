<?php
include("connection.php");//connect with this connection.php
        header("refresh: 60");
        $StaffId = $_SESSION['StaffId'] ;
        $sqlinnerjoin = "SELECT `attendance`.`AttendanceId`,`attendance`.`SigninTime`,`attendance`.`SignoutTime`,`attendance`.`Date`,`staff`.`StaffName` FROM `attendance` INNER JOIN `staff` ON `attendance`.`StaffId` = `staff`.`StaffId` WHERE `attendance`.`StaffId`='$StaffId' AND `attendance`.`SignoutTime`!='0000-00-00 00:00:00' ORDER BY `attendance`.`Date` DESC  ";
        $resultinnerjoin = mysqli_query($connect,$sqlinnerjoin);
        $total=0;
        
        if(mysqli_num_rows($resultinnerjoin)> 0) //if table listcourse de data 1 atau lebih
        {
            while($rowinnerjoin = mysqli_fetch_assoc($resultinnerjoin)) //output in each row
            { 
               $date1=strtotime($rowinnerjoin['SigninTime']);
               $date2=strtotime($rowinnerjoin['SignoutTime']);
               $diff =abs($date2-$date1);
               $differthour = floor($diff/(60*60*8));
                $total = $total+$differthour;
            }
                
            printf(" %d ",$total);  
        } 
        else if(mysqli_num_rows($resultinnerjoin) == 0)
        {
            printf(" %d ",$total);  
        } 
        mysqli_close($connect);
  
