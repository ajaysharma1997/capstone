


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

<body background="images/d13.jpg" >
<div class="container">

<?php
include("menu.php")
?>
<div class="row">
    <div class="col-md-12" style="height: 600px;">
   <?php
    include 'blogic.php';
    $res=ExecuteQuery("select * from electric where m_id=$_REQUEST[pid] ");
    $row=mysql_fetch_assoc($res);
    echo "<table width='100%' border='1'>";
    echo "<tr><td colspan='2' align='center'><img src='$row[m_image]'/></td></tr>";
    echo "<tr><td><font color='red'><label> Product Name</label></font> </td> <td><font color='red'><label>$row[m_name]</label></font></td></tr>";
    echo "<tr><td><font color='red'><label> Product Price </label></font></td> <td><font color='red'><label>$row[m_price]</label></font></td></tr>";
    echo "<tr><td><font color='red'><label> Product Brand</label></font> </td> <td><font color='red'><label>$row[m_brand]</label></font></td></tr>";
    echo "<tr><td><font color='red'><label> Product Available</label></font> </td> <td><font color='red'><label>$row[m_available]</label></font></td></tr>";
    echo "</table>";
    
?>
 
    
    </div>
</div>
<div class="navbar-header">
      <a class="navbar-brand" href="onlinepayment.php"><button type="button">Buy</button></a>
    </div>
   




    


</div>
</body>
</html>

