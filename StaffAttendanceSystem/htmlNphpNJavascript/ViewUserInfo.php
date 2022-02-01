<?php session_start(); ?>
<html>
<head>
<script src="logout.js"></script>
<script src ="AddDeleteUpdate.js"></script>
<link rel="stylesheet" type="text/css" href="../css/main.css"> 
<link rel="stylesheet" type="text/css" href="../css/staf.css">
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
        <a><img src="../img/LogoUMP.png" class="ump" alt="loginpicture"  ></a>
  </div>
    <button onClick="JavaScript:exit()"  style="float:right" class="active" >Log Out</button>
    <form action="" method="POST" id="form">
    <input type='submit' value='Check out' name='add' style="float:right" onclick="submitForm('stoptime.php');"/>
    <input type='submit' value='Check in' name='add' style="float:right" onclick="submitForm('settime.php');"/>
    </form>
</div>
<div class="columnViewPersonalInfo" >
   <h2>View User Information</h2>
   <table id="actionlog">
   <tr><td>Staff ID</td><td>Name</td><td>Email</td><td>Phone Number</td><td>Age</td><td>Password</td></tr>
        <tr typecolor=red ><?php   include 'ViewPInfoDb.php'; ?></tr></table>
  </div>

</body>
</html>