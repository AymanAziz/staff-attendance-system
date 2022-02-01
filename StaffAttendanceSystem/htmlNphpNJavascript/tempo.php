<table><form action="update.php" method="POST">
<tr><td colspan="2">User Information</td></tr>

<tr><td>Name:</td>
<td>Email address</td></tr>

<tr><td><input type="text" name="StaffName" id="StaffName" placeholder="Full name"></td>
<td><input type="text" name="StaffEmail" id="StaffEmail" placeholder="Email"></td></tr>

<tr><td>Phone Number</td>
<td>Age</td></tr>

<tr><td><input type="text" name="StaffNo" id="StaffNo" placeholder="Phone Number"></td>
<td><input type="text" name="StaffAge" id="StaffAge" placeholder="Age"></td></tr>

<tr><td colspan="2">__________________________________________________</td></tr>
<tr><td colspan="2">Change Password</td></tr>
<tr><td colspan="2"><input type="text" name="StaffPasswrd" id="StaffPasswrd" placeholder="Passsword" ></td></tr>
<tr><td colspan="2"><input type="submit" value="submit"></td></tr>
</form></table>
  
<table>
  <tr><td colspan="5">Staff</td></tr>
  <tr><td>No</td><td>Name</td><td>Email</td><td>Phone Number</td><td>Age</td></tr>
  <tr><?php include 'viewStaff.php';?></tr>
</table>