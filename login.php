
<?php



session_start();
//error_reporting(E_ALL);
$username=$_REQUEST['uname']; 
$password=$_REQUEST['psw']; 

$connection=mysql_connect("localhost","root","");
mysql_select_db("sahil");

if(!empty($connection)) {
		//echo "connect DB";
}
$query="SELECT * FROM user WHERE username='".$username."' AND confirmPwd='".$password."'";
$result=mysql_query($query);
while ($row = mysql_fetch_array($result)) {
	
	$data = $row;
	$_SESSION['user_id'] = $row["id"];
	$_SESSION['username'] = $row["username"];
	$_SESSION['status'] = 'logged';

	}
?>
<?php if(isset($data)) { ?>
<html>
<head>
<style>
.logout{ 
float:right; 
padding-bottom:20px;
}
.submit {
    background-color: #e7e7e7;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.form{
     height: 55.5px;
     font-size:200%;
     padding-bottom:100px;	
	 background-color:DimGray;
	 border-style:solid;
	 border-width:2px;
	 text-align: center;
}
th, td {
          padding: 15px;
	}
table {
        border:4px solid black;
}
 td{   
	   height: 60px;
       border:1px solid black;
}

table {
    border-collapse: collapse;
    width: 60%;
}
</style>
</head>
<body>
<div class="form"><font color="silver"><h1> Welcome to Salary Management System</font></h1>
<span class="logout"><font size="5"><a href="logout.php">Logout</a></font></span>
</div>
<br>
<br>
<p><font size="7">Details</font></p>
<table>
<tr>
<td><b>User Name :</b><?php print $data["username"]?> </td>
<td><b>Last Name :</b><?php  print $data["lastName"]?></td>
<td><b>First Name :</b><?php  print $data["firstName"]?></</td>
</tr>
<tr>
<td><b>Employee Id :</b><?php print $data["employeeId"]?></td>
<td><b>Email id :</b><?php print $data["emialId"]?></td>
<td><b>City :</b><?php print $data["city"]?></td>
</tr>
<tr>
<td><b>Department :</b><?php print $data["department"]?></td>
<td><b>Designation :</b><?php print $data["designation"]?></td>
<td><b>Date of Joining :</b><?php print $data["dateOfJoining"]?></td>
</tr>
<tr>
<td><b>Pan Number :</b><?php print $data["panNo"]?></td>	
<td><b>Bank Name :</b>	<?php print $data["bank"]?></td>	
<td><b>Account No :</b><?php print $data["accountNo"]?> </td>
</tr>
</table>
<br>
<br>
<p> <font size="6">To calculate salary PRESS submit</font></p>
<form action="rahul.php">
<input type="submit" class="submit">
</form>
</body>
</html>
<?php } else {
	echo "Wrong User";
	?> 
	<html><body>
	<a href="Salary.html"> Click here to login again</a>
	</body></html>
   <?php
}	

?>

