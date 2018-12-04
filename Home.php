<?php
session_start();
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

<body onload="Start()"  background="images/d1.jpg" >
<div class="container">
 
<?php
include("menu.php")
?>
<div class="row">
    <div class="col-md-8" style="height: 500px;">
   <br />
   <br />
    <h1><marquee> VENDOR MANAGEMENT</marquee></h1>
    
    
    </div>
    <div class="col-md-4">
   
    <?php
    include("query.php")
    ?>
    
    </div>
</div>

<?php
include("foot.php")
?>
</div>
</body>
</html>