<?php session_start(); ?>
<html>
<head>
<script src="logout.js"></script>
<script src ="AddDeleteUpdate.js"></script>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
<ul>
  <li><a href="adminmain.php">Dashboard</a></li>
  <li><a href="addStaff.php">Add Staff</a></li>
  <li><a href="DeleteStaff.php">Delete Staff</a></li>
  <li><a href="ApproveLeave.php">View Apply Leave</a></li>
</ul>
<div class="topnav"  >
  <!-- Centered link -->
  <div class="topnav-centered">
        <img src="../img/LogoUMP.png" class="ump" alt="loginpicture"  >
  </div>
    <button onClick="JavaScript:exit()"  style="float:right" class="active" >Log Out</button>
</div>
<div class="addstaff">
  <h2>Add Staff</h2>
  <table id="addAll"><form action="addStaffsql.php" method="POST">
  <tr><td colspan="2">User Information</td></tr>

  <tr><td>Name:</td>
  <td>Email address</td></tr>

  <tr><td><input type="text" name="StaffName" id="StaffName" placeholder="Full name"></td>
  <td><input type="text" name="StaffEmail" id="StaffEmail" placeholder="Email"></td></tr>

  <tr><td>Phone Number</td>
  <td>Age</td></tr>

  <tr><td><input type="text" name="StaffNo" id="StaffNo" placeholder="Phone Number"></td>
  <td><input type="text" name="StaffAge" id="StaffAge" placeholder="Age"></td></tr>

  <tr><td colspan="2">__________________________________________________________________________________</td></tr>

  <tr><td>Username</td><td>Temporary Password</td></tr>
  <tr><td><input type="text" name="StaffId" id="StaffId" placeholder="Staff Id" ></td>
  <td><input type="text" name="StaffPasswrd" id="StaffPasswrd" placeholder="Passsword" ></td></tr>
  <tr><td colspan="2"><input type="submit" value="submit"></td></tr>
  </form></table>
</div>

  

</body>
</html>