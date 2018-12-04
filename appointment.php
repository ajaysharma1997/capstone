<?php
$msg="";
if(isset($_REQUEST['Submit']))
{
    include 'blogic.php';
    
    $qry="insert into appointment values($_REQUEST[Token],'$_REQUEST[Name]','$_REQUEST[Contact]','$_REQUEST[City]','$_REQUEST[State]','$_REQUEST[Country]','$_REQUEST[Query]','$_REQUEST[Email]','$_REQUEST[Time]','$_REQUEST[Password]')";
    ExecuteNonQuery($qry);
    if(mysql_affected_rows()>0)
    {
        $msg="<font color='green'><h4>Appointment Booked!!!</h4></font>";
    }
    else
    {
        $msg="<font color='red'><h4>Error in Booking Appointment!!!</h4></font>".mysql_error();
    }
    mysql_close($h);
}
?>
<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale="1"/>
	<link rel="stylesheet" href="bootstrap/js/bootstrap.min.css"/>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 
   

	<title>VENDOR MANAGEMENT</title>
</head>

<body background="images/vendor.jpg" >
<div class="container">

<?php
include("menu.php")
?>
<div class="row">
    <div class="col-md-12" style="height: 500px;">
   <form>
<table width="100%" border="0">
<tr>
    <td><label>Token Number*</label><br /><input type="text" id="token" name="Token" placeholder="Token" style="width:300px;"/></td>
    <td><label>Full Name*</label><br /><input type="text" id="name" name="Name" placeholder="Enter Your Full Name" style="width:300px;"/></td>
    </tr>
<tr>
    <td><label>Contact Number*</label><br /><input type="text" id="contact" name="Contact" placeholder="Enter Your Contact Number" style="width:300px;"/></td>
    <td><label>City*</label><br /><input type="text" id="city" name="City" placeholder="Enter Your City" style="width:300px;"/></td>
</tr>
<tr>
    <td><label>State*</label><br /><select id="state" name="State" style="width:300px;">
<option >Select State</option>
<option >UttarPradesh</option>
<option >Punjab</option>
<option >Delhi</option>
<option >Uttaranchal</option>
</select></td>
    <td><label>Country*</label><br /><select id="country" name="Country" style="width:300px;">
<option>Select Country</option>
<option>USA</option>
<option>India</option>
<option>Pakistan</option>
<option>China</option>
</select></td>
</tr>
<tr>
    <td><label>Email ID*</label><br /><input type="text" id="email" name="Email" placeholder="Enter Your Email ID" style="width:300px;"/></td>
    <td><label>Password*</label><br /><input type="password" id="password" name="Password" placeholder="Enter Your Password" style="width:300px;"/></td>
</tr>
<tr>
    <td><label>Query/Speciality*</label><br /><textarea name="Query" placeholder="Enter Your Query" style="width:300px;"/></textarea></td>
    <td><label>Enter Date&Time</label><br />
<input type="time" id="time" name="Time" placeholder="Enter Time" style="width:300px;"/>
</td>
</tr>
<tr>
<td colspan="2">
<?php
echo $msg;
?>
</td>
</tr>
<tr>
    <td colspan="2"><input type="submit" name="Submit" value="Submit"/></td>
</tr>
</table>
</form>    
    
    </div>
</div>
</div>
</body>
</html>