<?php
if(!isset($_REQUEST['id']))
{
    header("location:showrappointment.php");
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
<div class="row">
    <div class="col-md-12">
  <?php
    $h=@mysql_connect("localhost","root"."");
    @mysql_select_db("cms");
    $res=mysql_query("select * from appointment where app_token=$_REQUEST[id]");
    $row=mysql_fetch_assoc($res);
    echo "<table width='100%' border='1'>";
    echo "<tr><td> Token Number </td> <td>$row[app_token]</td></tr>";
    echo "<tr><td>  Name </td> <td>$row[app_name]</td></tr>";
    echo "<tr><td> Contact Number </td> <td>$row[app_contact]</td></tr>";
    echo "<tr><td> Email </td> <td>$row[app_email]</td></tr>";
    echo "<tr><td> Password </td> <td>$row[app_password]</td></tr>";
    echo "<tr><td> City </td> <td>$row[app_city]</td></tr>";
    echo "<tr><td> Student Country </td> <td>$row[app_country]</td></tr>";
    echo "<tr><td> Student State </td> <td>$row[app_state]</td></tr>";
    echo "<tr><td> Date&Time </td> <td>$row[app_time]</td></tr>";
    echo "<tr><td><a href='delete.php?id=$row[app_token]'> Delete Record</a></td><td><a href='edit_record.php?id=$row[app_token]'> Edit Record</a></td> </tr>";
    echo "</table>";
    
?>
    
    </div>
</div>

<?php
include("foot.php")
?>

    


</div>
</body>
</html>