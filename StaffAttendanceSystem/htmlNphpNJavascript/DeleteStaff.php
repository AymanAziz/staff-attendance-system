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
<div class="topnav">
  <!-- Centered link -->
  <div class="topnav-centered">
        <a><img src="../img/LogoUMP.png" class="ump" alt="loginpicture"  ></a>
  </div>
    <button onClick="JavaScript:exit()"  style="float:right" class="active" >Log Out</button>
</div>
<form action="deletestaffdatabase.php" method="POST" >
    <div class="totalemployee">
    <h2>Delete Employee</h2>
    <h3><select name="course" > <?php include 'checkstaffdatabase.php'; ?></select></h3>
    <table id="delete"><tr><td><h3><input type="submit"  value="Delete"></h3></table>  </td></tr>  
    </div>
</form>





</body>
</html>