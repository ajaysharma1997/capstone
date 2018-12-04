
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

<body background="images/cement and reinforcement service.jpg" >
<div class="container">

<?php
include("menu.php")
?>
<div class="row">
    <div class="col-md-12">
  <?php
    include 'blogic.php';
    $res=ExecuteQuery("select * from electric where m_type='mason' ");
    $count=0;
    $c=0;
    while($r=mysql_fetch_assoc($res))
    {
        if($c==0)
        {
            $x="bg-primary";
            $c=1;
        }
        else{
            $x="bg-info";
            $c=0;
        }
        if($count==0)
            echo "<div class='row'>";
        echo "<div class='col-md-4 $x'>";
        echo "<table>";
        echo "<tr><td colspan='2'><a href='mason_desc.php?pid=$r[m_id]'><img src='$r[m_image]'/></a></td></tr>";
        echo "<tr><td><b>Name</b></td><td>$r[m_name]</td></tr>";
        echo "<tr><td><b>Price</b></td><td>$r[m_price]</td></tr>";
        echo "</table>";
        echo "</div>";
        $count++;
        if($count==3)
        {
            echo "</div>";
            $count=0;
        }
    }
?>
  
    
    </div>
</div>


    


</div>
</body>
</html>