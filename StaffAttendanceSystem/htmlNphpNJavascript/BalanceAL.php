<?php
include("connection.php");
header("refresh: 60");

if (isset($_SESSION['course'])) {

  $course = $_SESSION['course'] ;
  $sqlcount = "SELECT `aprroveleave`.`StaffId` FROM `aprroveleave`WHERE (`aprroveleave`.`StaffId`= '$course')";
  $result = mysqli_query($connect,$sqlcount);
  $total=0;
  $all =0;
  if(mysqli_num_rows($result)> 0) //if table listcourse de data 1 atau lebih
  {
    while($rowinnerjoin = mysqli_fetch_assoc($result)) //output in each row
    { 
      $total = $total+1;
      $all = 8 -$total; 
         
    }
    printf(" %d Days",$all);    
            
  } 
  else if(mysqli_num_rows($result)== 0)
  {
    
    $total = 8;
    printf(" %d Days",$total);            
  } 
  mysqli_close($connect);

}
else if(isset($_SESSION['StaffId'])) {

  $StaffId  = $_SESSION['StaffId'];
  $sqlcount = "SELECT `aprroveleave`.`StaffId` FROM `aprroveleave`WHERE (`aprroveleave`.`StaffId`= '$StaffId')";
  $result = mysqli_query($connect,$sqlcount);
  $total=0;
  $all =0;
  if(mysqli_num_rows($result)> 0) //if table listcourse de data 1 atau lebih
  {
    while($rowinnerjoin = mysqli_fetch_assoc($result)) //output in each row
    { 
      $total = $total+1;
      $all = 8 -$total; 
      
    }
    printf(" %d Days",$all);   
  } 
  else if(mysqli_num_rows($result)== 0)
  {
    
    $total = 8;
    printf(" %d Days",$total);            
  } 
  mysqli_close($connect);

}

?>