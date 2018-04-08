<html>
<head>
<title></title>
<script>
function myFunction() {
    window.print();
}
</script>
</head>
<body>
<?php
Session_start();
               //  print_r($_REQUEST);
				$user_id=$_SESSION['user_id'];
                $userId=$_REQUEST['userId'];
                $bp=$_REQUEST['bp'];
				$ad=$_REQUEST['ad'];
				$oh=$_REQUEST['oh'];
				$da=$_REQUEST['da'];
				$hra=$_REQUEST['hra'];
				$gp=$_REQUEST['gp'];
				$pf=$_REQUEST['pf'];
				$tax=$_REQUEST['tax'];
				$deduction=$_REQUEST['deduction'];
				$pd=$_REQUEST['pd'];
				$ph=$_REQUEST['ph'];
				$netPay=$_REQUEST['netPay'];
				$fp=$_REQUEST['fp'];
				
			//echo $bp,$da;
		
		$connection=mysql_connect("localhost","root","");
		
		mysql_select_db("sahil");
				 

		   $query = "DELETE FROM calculator WHERE userId = '".$userId."'"	;
			mysql_query($query);
	
		   $detail="INSERT INTO calculator(`bp`,`ad`,`oh`,`da`,`hra`,`gp`,`pf`,`tax`,`deduction`,`pd`,`ph`,`netPay`,`fp`,`userId`) VALUES($bp,$ad
											,$oh,$da,$hra,$gp,$pf,$tax,$deduction,$pd,$ph,$netPay,$fp,$userId)";
					
		$result=mysql_query($detail);
		$result;
		
		if($result)
		{
		//	echo "data inserted";
		}
		
		
		$result1=mysql_query("SELECT * From calculator  WHERE  userId='".$userId."'");
		while($row1=mysql_fetch_array($result1)) 
{
	    $data1=$row1;
}
       $result2=mysql_query("SELECT * From user WHERE id='".$user_id."'");
		while($row2=mysql_fetch_array($result2)) 
{
	    $data2=$row2;
}
?>
<style>
.logout{ 
float:right; 
padding-bottom:20px;
}
button{
	background-color:#e7e7e7;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
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
<p align="center"><b><font size=30px >Vidyavardhini's College of Enggineering & Technology</b></font></p>
<div class="logout"><font size="5"><a href="logout.php">Logout</a></font></div>
<br>	
<br>
<br>
<center>
<table>
<caption><font size="6">Details</font></caption>
<tr>
<td><b>User Name:</b><?php print $data2["username"]?>
</td>
<td><b>Employee Id :</b><?php print $data2["employeeId"]?></td>
</tr>
<tr>
<td><b>Last Name :</b><?php  print $data2["lastName"]?></td>
<td><b>First Name :</b><?php  print $data2["firstName"]?></td>
</tr>
</table>
</center>
<br>
<br>
<center>
<table>
<caption><font size="6">Salary slip</font></caption>
<tr>
<td><b>Basic Pay :</b><?php print $data1["bp"]?> </td>
<td><b>Absent Days :</b><?php  print $data1["ad"]?></td>
<td><b>Overtime Hours :</b><?php  print $data1["oh"]?></td>
</tr>
<tr>
<td><b>Dearness Allowance	:</b><?php print $data1["da"]?></td>
<td><b>House Rent Allowance	 :</b><?php print $data1["hra"]?></td>
<td><b>Others:</b><?php print $data1["gp"]?></td>
</tr>
<tr>
<td><b>Provident Fund :</b><?php print $data1["pf"]?></td>
<td><b>Service Tax :</b><?php print $data1["tax"]?></td>
<td><b>Deduction :</b><?php print $data1["deduction"]?></td>
</tr>
<tr>
<td><b> Payment Per Day :</b><?php print $data1["pd"]?></td>	
<td><b> Payment Per Hour :</b>	<?php print $data1["ph"]?></td>	
<td><b> Net Pay :</b><?php print $data1["netPay"]?> </td>
</tr>
<tr>
<td colspan="3"><center><b>Final Payment :</b><?php print $data1["fp"]?></center></td>
</tr>
</table>
</center>
<br>
<br>
<center>
<button onclick="myFunction()">Print</button></center>
</body>
</html>
	
																					
																					
																					
																					
																					
																					
																					
																					
																					
																					
																					
																					
																					
																					
																					
																					
																					