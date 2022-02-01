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
<form action="SelectApproveleave.php" method="POST" >
    <div class="checkStaff">
    <h2>Select Employee</h2>
    <h3><select name="course" > <?php include 'checkApplyLeave.php'; ?></select></h3>
    <table id="comfirm"><tr><td><h3><input type="submit"  value="Comfirm"></h3></table></td></tr>  
    </div>
</form>  
<div class="balanceApproveList" >
      <h2>Balance for Apply Leave</h2>
      <br>
     <h3><?php include 'BalanceAL.php'; ?></h3> 
 </div>

<div class="view">
  <table id="viewAllinfo">
  <h2>Employee Information Apply Leave</h2>
  <form action="" method="POST" id="form">
  <input type='submit' class="Approve" value='Approve Leave' name='Approve' style="float:right" onclick="submitForm('acceptAL.php');"/>
  <input type='submit' class="Reject" value='Reject' name='Reject' style="float:right" onclick="submitForm('rejectAL.php');"/>
  </form>
  <tr>
    <td>No</td><td>Name</td><td>Date</td><td>Reason</td>
  </tr>
  <tr><?php include 'allApproveLeave.php'; ?></tr>
  </table>
</div>

<div class="viewSuccessAL">
  <table id="viewAllinfo">
  <h2>Employee Information Approve Leave</h2>
  <tr>
    <td>No</td><td>Name</td><td>Date</td><td>Reason</td>
  </tr>
  <tr><?php include 'successAL.php'; ?></tr>
  </table>
</div>



   
</body>
</html>