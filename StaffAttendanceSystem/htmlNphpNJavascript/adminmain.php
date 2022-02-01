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
        <a><img src="../img/LogoUMP.png" class="ump" alt="loginpicture"  ></a>
  </div>
    <button onClick="JavaScript:exit()"  style="float:right" class="active" >Log Out</button>
</div>

<div class="totalemployee">
<h2>Total Employee</h2>
  <h3><?php include 'totalemployee.php';?></h3>
</div>

<div class="viewStaff">
<h2>All Staff Information</h2>
<table id="viewAllinfo">
  <td>No</td><td>Name</td><td>Email</td><td>Phone Number</td><td>Age</td>
  </tr>
  <tr><?php include 'viewStaff.php';?></tr>
  </table>

</div>



</body>
</html>