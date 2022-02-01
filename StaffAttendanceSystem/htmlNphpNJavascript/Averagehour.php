<?php
include("connection.php");//connect with this connection.php
        header("refresh: 60");


        $StaffId = $_SESSION['StaffId'] ;
        $sqlinnerjoin = "SELECT `attendance`.`AttendanceId`,`attendance`.`SigninTime`,`attendance`.`SignoutTime`,`attendance`.`Date`,`staff`.`StaffName` FROM `attendance` INNER JOIN `staff` ON `attendance`.`StaffId` = `staff`.`StaffId` WHERE `attendance`.`StaffId`='$StaffId' AND `attendance`.`SignoutTime`!='0000-00-00 00:00:00' ORDER BY `attendance`.`Date` DESC ";
        $resultinnerjoin = mysqli_query($connect,$sqlinnerjoin);
        $total=0;
        $average=0;
        if(mysqli_num_rows($resultinnerjoin)> 0) //if table listcourse de data 1 atau lebih
        {
            while($rowinnerjoin = mysqli_fetch_assoc($resultinnerjoin)) //output in each row
            { 
               // echo"<tr typecolor=rgb(32, 215, 228) ><td>".$rowinnerjoin["StaffName"]."</td><td>Check in:".$rowinnerjoin["SigninTime"]."</td><td>Check out:".$rowinnerjoin["SignoutTime"]."</td></tr>";
               $date1=strtotime($rowinnerjoin['SigninTime']);
               $date2=strtotime($rowinnerjoin['SignoutTime']);
               $diff =abs($date2-$date1);
               $differthour = floor($diff/(60*60));
                $total = $total+$differthour;
                $average =$average +1;
            }
                  
                // call php function
                    printf(" %d Average Hour",averagehour($total, $average) );  
        }
        else if(mysqli_num_rows($resultinnerjoin) == 0)
        {
            printf(" %d ",$total);  
        }  
        mysqli_close($connect);

//php function
function averagehour(int $total, int $average) {
$averagehour = $total/$average;

return $averagehour;
}
         