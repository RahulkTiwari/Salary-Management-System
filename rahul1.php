<html>
<body>
<?PHP
//error_reporting(E_ALL);
//print_r($_REQUEST);exit;
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$confirmPwd=$_REQUEST['confirmPwd'];
	$firstName=$_REQUEST['firstname'];
    $lastName=$_REQUEST['lastname'];
	$maritalStatus =$_REQUEST['maritalStatus'];
	$employeeId=$_REQUEST['employeeId'];
	$qualification=$_REQUEST['qualification'];
	$gender=$_REQUEST['gender'];//echo $_REQUEST['gender'];
	$birthDate = $_REQUEST['birthDate'];
	$birthMonth=$_REQUEST['birthMonth'];
	$birthYear=$_REQUEST['birthYear'];
	$contactNo=$_REQUEST['contactno'];
	$emialId=$_REQUEST['email'];
	$address =$_REQUEST['address'];
	$country =$_REQUEST['country'];
	$city =$_REQUEST['city'];
	$pinCode = $_REQUEST['pinCode'];
	$dojYear=$_REQUEST['dojYear'];
	$dojMonth=$_REQUEST['dojMonth'];
	$dojDate=$_REQUEST['dojDate'];
	$designation=$_REQUEST['designation'];
	$department = $_REQUEST['department'];
	$panNo = $_REQUEST['panNo'];
     $bank=$_REQUEST['bank'];
	$accno=$_REQUEST['accno'];
	$dateOfJoining = $dojYear."-".$dojMonth."-".$dojDate;
	$dateOfBirth=$birthYear."-".$birthMonth."-".$birthDate;

	

	$connection=mysql_connect("localhost","root","");
	
	
	
	
		mysql_select_db("sahil");
	 $sdetail="INSERT INTO user(`username`,`password`,`confirmPwd`,`lastName`,`firstName`,`employeeId`,`maritalStatus`,
				`qualification`,`gender`,`birthDate`,`contactNo`,`emialId`,`address`,`country`,`city`,`pinCode`,`designation`,`department`,`dateOfJoining`,
	`panNo`,`bank`,`accountNo`) VALUES ('$username','$password','$confirmPwd','$lastName','$firstName','$employeeId','$maritalStatus','$qualification','$gender',
	'$dateOfBirth',$contactNo,'$emialId','$address','$country','$city',$pinCode,'$designation','$department','$dateOfJoining',$panNo,'$bank',$accno)"; 

	$result=mysql_query($sdetail);
	
	if($result){
		echo "Account created succesfully";
	}
?>

</table>
</body>
</html>

