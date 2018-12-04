
<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale="1"/>
	<link rel="stylesheet" href="bootstrap/js/bootstrap.min.css"/>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

	<title>MASTER PAGE</title>
</head>

<body background="images/d4.jpg" >
<div class="container">
<?php
include("menu.php")
?>
<div class="row">
    <div class="col-md-12" style="height: 500px;">
    <?php
    include 'blogic.php';
    $res=ExecuteQuery("select * from query");
    if(mysql_affected_rows()>0)
    {
        echo "<table width='100%' border=1>";
        echo "<tr><th>Name</th><th>Email</th><th>Query</th></tr>";
        while($row=mysql_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>$row[0]</td><td>$row[1]</td><td>$row[4]</td>";
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
<div class="row">
    <div class="col-md-12 bg-info">
   

    </div>
    </div>
</div>

</div>
</body>
</html>