<?php
session_start();
//error_reporting(E_ALL);
$userId=$_SESSION['user_id'];
$host=mysql_connect("localhost","root","");
mysql_select_db("sahil");
if(!empty($host)) {
		//echo "connect DB";

}
$query="SELECT * FROM user WHERE id = '".$userId."'";
$result=mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$data = $row;
}
?>
<html>
<title>Salary Calculator</title> 
<script type = "text/javascript">
function calc()
{
var  oh,PH,FP,ad,PD,bp,DA,HRA,GP,PF,Tax,Deduction,NetPay,name,id,desg;
bp = parseInt(document.form1.bp.value);
ad = parseInt(document.form1.ad.value);
oh = parseInt(document.form1.oh.value);

DA = bp * 0.5;
HRA = bp * 0.5;
GP= bp + DA + HRA;
PF = GP * 0.02;
Tax = GP * 0.01;
Deduction = Tax + PF;
NetPay = GP - Deduction;
PD=NetPay/30;
PH=PD/8;
FP=((30-ad)*PD)+(oh*PH);
// to insert in the respective text box.
        document.form1.da.value = DA;
        document.form1.hra.value = HRA;
        document.form1.gp.value = GP;
        document.form1.pf.value = PF;
        document.form1.tax.value = Tax;
        document.form1.deduction.value = Deduction;
        document.form1.netPay.value = NetPay;
        document.form1.pd.value = PD; 
        document.form1.fp.value = FP;
        document.form1.ph.value = PH;
}
</script>
<style>
.logout{ 
    float:right; 
    padding-bottom:20px;
}
 r1{
   border:5px;
}
th, td {
    padding: 10px;
	}
table{
        border:3px solid black;
}
td{   
	   height: 40px;
       border:2px solid black;
}

table{
    border-collapse: collapse;
    width: 40%;
}
*{
margin:0;
}
button:hover 
{
    opacity: 0.8;
}
h1
{
font-family:Fantasay;
 background-color:DimGray;
font-size:80px;
height:120px;
border-bottom:4px solid red;
}
.submit,.button,.reset{
    background-color: #e7e7e7;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>
<body>
<center>
<div class="form"><font color="silver"><h1>Salary Management System</font></h1>
</div>
<br>
<br>
<p><font size="5"><b>Salary Generator</b></font></p><br>
<table>
<tr>
<td><b>User Name:</b><?php print $data["username"]?>
</td>
<td><b>Employee Id :</b><?php print $data["employeeId"]?></td>
</tr>
<tr>
<td><b>Last Name :</b><?php  print $data["lastName"]?></td>
<td><b>First Name :</b><?php  print $data["firstName"]?></td>
</tr>
</table>
<p><font size="5"><b>Please Enter The Basic Pay</b></font></p> 
<form action="slip.php"  method="POST" name = "form1">
<table>
<tr>
<td><b>Basic Pay</b></td>
<td><input type = "text" name = "bp" >
<input type = "hidden" name = "userId" value= "<?php print $userId ?>">
</td>
</tr>
<td><b>Absent Days</b></td>
<td><input type = "text" name = "ad"></td>
</tr>
<td><b>Overtime Hours</b></td>
<td><input type = "text" name = "oh" ></td>
</tr>
<tr>
<td colspan="2"><center><input type = "button" class="button" name = "calculate"  value = "Click Here To Calculate"
	  onclick ="calc()"></center></td>
</tr>
<tr>
<td><b>Dearness Allowance </b><b</td>
<td><input type = "text" name = "da"></td>
</tr>
<tr>
<td><B>House Rent Allowance</b> </td>
<td><input type = "text" name = "hra"></td>
</tr>
<tr>
<td><b>Others</b></td>
<td><input type = "text" name = "gp"></td>
</tr>
<tr>
<td><b>Provident Fund<b></td>
<td><input type = "text" name = "pf"></td>
</tr>
<tr>
<td><b>Service Tax</b></td>
<td><input type = "text" name = "tax"></td
</tr>
<tr>
<td><b>Deduction</b></td>
<td><input type = "text" name = "deduction"></td>
</tr>
<tr>
<td><b>Payment Per Day</b></td>
<td><input type = "text" name = "pd"></td>
</tr>
<tr>
<td><b>Payment Per Hour</b></td>
<td><input type = "text" name = "ph"></td>
</tr>
<tr>
<td><b>Net Pay</b></td>
<td><input type = "text" name = "netPay"></td>
</tr> 
<tr>
<td><b>Final Payment</b></td>
<td><input type = "text" name = "fp"></td>
</tr>
</table>  
<br>
<p> <font size="6">To Generate Salary Slip Press Submit</font></p>
<button type="submit" class="submit">Submit</button> 
<input type="reset" class="reset" >
</form>
</center>
</body>
</html>