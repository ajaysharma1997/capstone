<?php
session_start();
if(!isset($_SESSION['uid']))
{
    header("location:login.php");
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

<body background="images/d2.jpg" >
<div class="container">

<?php
include("menu.php")
?>
<div class="row">
    <div class="col-md-12"style="height: 600px;">
    <?php
   include 'blogic.php';
    $res=ExecuteQuery("select * from appointment where app_token=$_SESSION[uid]");
    //$h=@mysql_connect("localhost","root","");
    //@mysql_select_db("cms");
    //$res=mysql_query("select * from student_info");
    if(mysql_affected_rows()>0)
    {
        echo "<table width='100%' border=1>";
        echo "<tr><th>Token Number</th><th>Name</th><th>Query</th><th>Date&Time</th><th></th></tr>";
        while($row=mysql_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>$row[0]</td><td>$row[1]</td><td>$row[7]</td><td>$row[8]</td><td><a href='desc.php?id=$row[0]'>more details</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "<h4>No Record Found!!!</h4>";
    }
    ?> 
    
    </div>
</div>



    


</div>
</body>
</html>