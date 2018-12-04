<?php
session_start();
$msg="";
$temp="";
if(isset($_REQUEST['Login']))
{
    include 'blogic.php';
    $res=ExecuteQuery("select * from appointment where app_email='$_REQUEST[User]' and app_password='$_REQUEST[Password]'");
    if(mysql_affected_rows()>0)
    {
        if(isset($_REQUEST['rem']))
        {
            setcookie("mycookie",$_REQUEST['User'],time()+60);
            setcookie("mycookie1",$_REQUEST['Password'],time()+60);
            
        }
        $r=mysql_fetch_assoc($res);
        $_SESSION['uid']=$r['app_token'];
        $_SESSION['uname']=$r['app_name'];
        header("location:showappointment.php");
    }
    else
    {
        $msg="<font color='red'>Invalid Username and Password</font>";
    }
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
    <?php
    include("validate.php");
?>
   

	<title>VENDOR MANAGEMENT</title>
</head>

<body background="images/vendor1.jpg" >
<div class="container">

<?php
include("menu.php")
?>
<div class="row">
    <div class="col-md-12"style="height: 500px;">
    <form onsubmit="return validate()" >
<h3><?php echo $msg; ?></h3> 
User Id:<br />
<input type="text" id="txt" name="User" value="<?php
 if(isset($_COOKIE['mycookie']))
{
    echo $_COOKIE['mycookie'];
}
 ?>" /><br />
Password:<br />
<input type="password" id="txt" name="Password" value="<?php
 if(isset($_COOKIE['mycookie1']))
{
    echo $_COOKIE['mycookie1'];
}
 ?>" /><br />

<br />
<input type="checkbox" name="rem" value="on" />Remember me<br />
<input type="submit" id="log" name="Login" value="Log in"/>      <br />
<br>

</form>

    
    </div>
</div>

<?php
include("foot.php")
?>

    


</div>
</body>
</html>