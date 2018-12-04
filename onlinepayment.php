
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

<body background="images/d21.jpg" >
<div class="container">

<?php
include("menu.php")
?>
<?php
    include("validate.php")
?>
<div class="row">
    <div class="col-md-12" style="height: 500px;">
   <form onsubmit="return validate()">
<table width="100%" border="0">
<tr>
    <td><label>Full Name*</label><br /><input type="text" id="txt" name="txt" placeholder="Enter Your Full Name" style="width:300px;"/></td>
    <td><label>Email ID*</label><br /><input type="text" name="txt1" placeholder="Enter Your Email ID" style="width:300px;"/></td>
    </tr>
<tr>
    <td><label>Contact Number*</label><br /><input type="text" name="txt" placeholder="Enter Your Contact Number" style="width:300px;"/></td>
    <td><label>Amount you wish to pay:</label><br /><input type="text" name="txt1" placeholder="Amount" style="width:300px;"/></td>
</tr>
<tr align="left">
<th><input type="checkbox"/><a><label>“I Agree” to the Terms & Conditions of the VENDOR MANAGEMENT Online Payment Gateway.</label></a></th>
</tr>
<tr align="left">
<th colspan="3" align="left"><input type="submit" name="pay" value="PAY NOW"></th>
<?php
if(isset($_REQUEST['pay']))
{
    header("location:bank.php");
}
?>

</tr>
</table>
</form>    
    
    </div>
</div>



    


</div>
</body>
</html>