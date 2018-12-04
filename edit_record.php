<?php
$msg="";

    $h=@mysql_connect("localhost","root","");
    @mysql_select_db("cms");
    if(isset($_REQUEST['id']))
    {
        $res=mysql_query("select * from appointment where app_token=$_REQUEST[id]");
        $row=mysql_fetch_assoc($res);
        
    }
    if(isset($_REQUEST['Update']))
    {
    $h=@mysql_connect("localhost","root","");
    @mysql_select_db("cms");
    $qry="update appointment set app_name='$_REQUEST[Name]',app_contact='$_REQUEST[Contact]',app_city='$_REQUEST[City]',app_state='$_REQUEST[State]',app_country='$_REQUEST[Country]',app_email='$_REQUEST[Email]',app_password='$_REQUEST[Password]',app_time='$_REQUEST[Time]' where app_token=$_REQUEST[Token]";
    mysql_query($qry);
    if(mysql_affected_rows()>=0)
    {
        $msg="<font color='green'><h4>Record Updated!!!</h4></font>";
        $res=mysql_query("select * from appointment where app_token=$_REQUEST[Token]");
        $row=mysql_fetch_assoc($res);
        echo $row['app_name'];
    }
    else
    {
        $msg="<font color='red'><h4>Error in Updating the Record!!!</h4></font>".mysql_error();
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
 
   

	<title>HOSPITAL MANAGEMENT</title>
</head>

<body background="images/hospital.jpg" >
<div class="container">

<?php
include("menu.php")
?>
<div class="row" height="1000px">
    <div class="col-md-12">
   <form>
<table width="100%" border="0">
<tr>
    <td><label>Token Number*</label><br /><input readonly type="text" id="token" name="Token" value="<?php  echo $row['app_token']; ?>" placeholder="Token" style="width:300px;"/></td>
    <td><label>Full Name*</label><br /><input type="text" id="name" name="Name"value="<?php  echo $row['app_name']; ?>" placeholder="Enter Your Full Name" style="width:300px;"/></td>
    </tr>
<tr>
    <td><label>Contact Number*</label><br /><input type="text" id="contact" name="Contact" value="<?php  echo $row['app_contact']; ?>" placeholder="Enter Your Contact Number" style="width:300px;"/></td>
    <td><label>City*</label><br /><input type="text" id="city" name="City"value="<?php  echo $row['app_city']; ?>" placeholder="Enter Your City" style="width:300px;"/></td>
</tr>
<tr>
    <td><label>State</label><br /><select id="state" name="State" style="width:300px;">
<option>Select State</option>
<option  <?php if($row['app_state']=="UttarPradesh") echo "selected"; ?> value="UttarPradesh">UttarPradesh</option>
<option  <?php if($row['app_state']=="Punjab") echo "selected"; ?> value="Punjab">Punjab</option>
<option  <?php if($row['app_state']=="Delhi") echo "selected"; ?> value="Delhi">Delhi</option>
<option  <?php if($row['app_state']=="Uttaranchal") echo "selected"; ?> value="Uttaranchal">Uttaranchal</option>
</select></td>
    <td><label>Country*</label><br /><select id="country" name="Country" style="width:300px;">
<option>Select Country</option>
<option  <?php if($row['app_country']=="USA") echo "selected"; ?> value="USA">USA</option>
<option  <?php if($row['app_country']=="India") echo "selected"; ?> value="India">India</option>
<option  <?php if($row['app_country']=="Pakistan") echo "selected"; ?> value="Pakistan">Pakistan</option>
<option  <?php if($row['app_country']=="China") echo "selected"; ?> value="China">China</option>
</select></td>
</tr>
<tr>
    <td><label>Email ID*</label><br /><input type="text" id="email" name="Email" value="<?php  echo $row['app_email']; ?>" placeholder="Enter Your Email ID" style="width:300px;"/></td>
    <td><label>Password*</label><br /><input type="password" id="password" name="Password" value="<?php  echo $row['app_password']; ?>" placeholder="Enter Your Password" style="width:300px;"/></td>
</tr>
<tr>
    <td><label>Query/Speciality*</label><br /><textarea name="Query" value="<?php  echo $row['app_query']; ?>" placeholder="Enter Your Query" style="width:300px;"/></textarea></td>
    <td><label>Enter Date&Time</label><br />
<input type="time" id="time" name="Time" value="<?php  echo $row['app_time']; ?>" placeholder="Enter Time" style="width:300px;"/>
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
    <td colspan="2"><input type="submit" name="Update" value="Update"/></td>
</tr>
</table>
</form>    
    
    </div>
</div>

<?php
include("foot.php")
?>

    


</div>
</body>
</html>