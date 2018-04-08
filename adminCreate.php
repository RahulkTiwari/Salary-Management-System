<html>
<head>
<script type ="text/javascript">
function delete1(id) {
	
}
</script>
</head>
</html>
<?PHP
	 // error_reporting(E_ALL);
	  //print_r($_REQUEST);
		session_start(); 
$connection=mysql_connect("localhost","root","");  
		  
		  mysql_select_db("sahil");			  
            if (!isset($_SESSION['userName'])) {
		  $userName=$_REQUEST['username'];  
		  $password=$_REQUEST['password'];
		  $result=mysql_query("SELECT * FROM admin WHERE username='".$userName."' AND pswd='".$password."'");
			 while($row1=mysql_fetch_array($result)) {
			   $data1=$row1;
			   $_SESSION['userName']=$row1["username"];
		   }
			
			}
		   $result1 = mysql_query("SELECT * FROM user");
		  
		 
if(isset($_SESSION['userName'])){ ?>
<html>
<head>
</head>
<body>
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
<th> Action</th>
</tr>
<?PHP
while($row=mysql_fetch_array($result1)) 
{ ?>
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
<td>
    <a href="delete.php?id=<?php print $row['id'];?>">Delete</a>
</tr>
<?php } ?>
</table>
</body>
</html>
<?php } else { 
	echo "Wrong User";
	?> 
	<html><body>
	<a href="adminlogin.html"> Click here Admin to login again</a>
	</body></html>
   <?php
}	
?>




