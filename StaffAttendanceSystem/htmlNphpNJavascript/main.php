<?php session_start(); ?>
<html>
<head>
<script src="logout.js"></script>
<script src ="AddDeleteUpdate.js"></script>
<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<ul>
<li><a href="main.php">Dashboard</a></li>
  <li><a href="user.php">Update User Information</a></li>
  <li><a href="ViewUserInfo.php">View User Information</a></li>
  <li><a href="Applyleave.php">Apply Leave</a></li>
</ul>
<div class="topnav"  >
  <!-- Centered link -->
  <div class="topnav-centered">
    <img src="../img/LogoUMP.png" class="ump" alt="loginpicture" >
  </div>
  <button onClick="JavaScript:exit()"  style="float:right" class="active" >Log Out</button>
  <form action="" method="POST" id="form">
  <input type='submit' value='Check out' name='add' style="float:right" onclick="submitForm('stoptime.php');"/>
  <input type='submit' value='Check in' name='add' style="float:right" onclick="submitForm('settime.php');"/>
  </form>
</div>

<!-- dashboard -->
<div class="balanceApproveList" >
      <h2>Balance for Apply Leave</h2>
     <h3><?php include 'BalanceAL.php'; ?></h3> 
 </div>

<div class="yeartotalday">
  <h2>Year Total Days</h2>
  <h3><?php include 'yeartotaldays.php';?> days</h3>
</div>

<div class="yeartotalhour">
  <h2>Year Total Hours</h2>
  <h3><?php include 'yeartotalhour.php';?>hours</h3>
</div>

<div class="averagehour">
  <h2>Daily Average Hours</h2>
  <h3><?php include 'Averagehour.php';?>hours</h3>
</div>

<div class="rightcolumn" >
      <h2>Status</h2>
      <table id="status"><?php include 'statusonline.php';?></table>
 </div>
 
 <div class="column" >
   <h2>Action Log</h2>
   <table id="actionlog"><tr typecolor=red ><?php include 'history.php'; ?></tr></table>
  </div>

 
 

</body>
</html>