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
<div class="leave">
  <h2>Apply Leave</h2>
  <table id="Applyleave"><form action="applyleavedatabase.php" method="POST" id="applyleave">
  <tr><td>Date:</td></tr>

  <tr><td><input type="date" name="Date" id="Date"></td></tr>
  <tr><td>Reason</td>
  </tr>
  <tr><td><textarea rows="4" cols="50" name="Reason" id="Reason" form="applyleave"></textarea></td></tr>
  <tr><td colspan="2"><input type="submit" value="submit"></td></tr>
  </form></table>
</div>

</body>
</html>