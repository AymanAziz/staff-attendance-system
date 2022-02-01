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

<div class="updatestaff">

    <table id="staff"><form action="update.php" method="POST">
    <h2>Update Personal Information</h2> 
    <tr><td colspan="2">User Information</td></tr>
    <tr><td>Name:</td>
    <td>Email address</td></tr>

    <tr><td><input type="text" name="StaffName" id="StaffName" placeholder="Full name"></td>
    <td><input type="text" name="StaffEmail" id="StaffEmail" placeholder="Email"></td></tr>

    <tr><td>Phone Number</td>
    <td>Age</td></tr>

    <tr><td><input type="text" name="StaffNo" id="StaffNo" placeholder="Phone Number"></td>
    <td><input type="text" name="StaffAge" id="StaffAge" placeholder="Age"></td></tr>

    <tr><td colspan="2">___________________________________________________________________________</td></tr>
    <tr><td colspan="2">Change Password</td></tr>
    <tr><td colspan="2"><input type="text" name="StaffPasswrd" id="StaffPasswrd" placeholder="Passsword" ></td></tr>
    <tr><td colspan="2"><input type="submit" value="Comfirm"></td></tr>
    </form></table>
</div>
  

</body>
</html>