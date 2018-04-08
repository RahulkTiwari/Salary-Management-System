<?PHP


    $connection=mysql_connect("localhost","root","");
    
	mysql_select_db("sahil");

	$result = mysql_query("SELECT * FROM user");
?>
<table border="1">
<tr>
<th>Username</th>
<th>Passward</th>
<th>Conform password</th>
<th>Lastname</th>
<th>Firstname</th>
<th>Employee Id</th>
<th>Martial Status</th>
<th>Qualification</th>
<th>Gender</th>
<th>BirthDate</th>
<th>Contact no</th>
<th>Email Id</th>
<th>Address</th>
<th>Country</th>
<th>City</th>
<th>Pincode</th>
<th>Designation</th>
<th>Department</th>
<th>Date of Joining</th>
<th>Pan No</th>
<th>Bank</th>
<th>Account No</th>
</tr>
<?PHP
while($row=mysql_fetch_array($result)) 
{?>
<tr>
<td>
  <?php print $row["username"];
		?>
 </td>
<td>
  <?php print $row["password"];
		?>
 </td>
 <td>
  <?php print $row["confirmPwd"];
		?>
 </td>
 <td>
  <?php print $row["lastName"];
		?>
 </td>
<td>
  <?php print $row["firstName"];
		?>
 </td>
<td>
  <?php print $row["employeeId"];
		?>
 </td>
 <td>
 <?php print $row["maritalStatus"];
		?>
 </td>
<td>
  <?php print $row["qualification"];
		?>
 </td>
<td>
  <?php print $row["gender"];
		?>
 </td>
 <td>
  <?php print $row["birthDate"];
		?>
 </td>
<td>
  <?php print $row["contactNo"];
		?>
 </td>
<td>
  <?php print $row["emialId"];
		?>
 </td>
<td>
  <?php print $row["address"];
		?>
 </td>
<td>
  <?php print $row["country"];
		?>
 </td>
<td>
  <?php print $row["city"];
		?>
	</td>
<td>
  <?php print $row["pinCode"];
		?>
		</td>
<td>
  <?php print $row["designation"];
		?>
 </td>
<td>
  <?php print $row["department"];
		?>
		</td>
<td>
 <?php print $row["dateOfJoining"];
		?>
		 </td>
 <td>
  <?php print $row["panNo"];
		?>
		</td>
 <td>
  <?php print $row["bank"];
		?>
		</td>
 <td>
  <?php print $row["accountNo"];
		?>
		</td>
 </td>
 </tr>
 <?PHP
 }?>
</table>
</body>
</html>