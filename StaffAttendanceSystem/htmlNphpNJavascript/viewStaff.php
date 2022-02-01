<?php
include("connection.php");//connect with this connection.php
 
       
        //header("refresh: 60");
     
        $sqlinnerjoin = "SELECT `staff`.`StaffEmail`,`staff`.`StaffNo`,`staff`.`StaffAge`,`staff`.`StaffName` FROM `staff`";
        $resultinnerjoin = mysqli_query($connect,$sqlinnerjoin);
         $number =0;
        if(mysqli_num_rows($resultinnerjoin)> 0) //if table listcourse de data 1 atau lebih
        {
            while($rowinnerjoin = mysqli_fetch_assoc($resultinnerjoin)) //output in each row
            {   
                $number =$number+1;
                 echo"<tr><td>$number</td><td>".$rowinnerjoin["StaffName"]."</td><td>".$rowinnerjoin["StaffEmail"]."</td><td>".$rowinnerjoin["StaffNo"]."</td><td>".$rowinnerjoin["StaffAge"]."</td></tr>";}
        }     
      mysqli_close($connect);
    
    
    


