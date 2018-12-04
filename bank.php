
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

<body background="images/d15.jpg" >
<div class="container">

<?php
include("menu.php")
?>
<div class="row">
    <div class="col-md-12"style="height: 500px;">
   <?php
   
    echo "<table width='100%'>";
    echo "<tr><td><b>Name On Card </b></td> <td><input type='text' name='Name'/></td></tr>";
    echo "<tr><td><b>Card Number </b></td> <td><input type='text' name='Number'/></td></tr>";
    echo "<tr><td><b>Card Expiry </b></td> <td><input type='date' name='Date'/></td></tr>";
    echo "<tr><td><b>Card CVV</b></td> <td><input type='text' name='CVV'/></td></tr>";
    echo "<tr><td colspan='2'><input type='submit' name='payment' value='MAKE PAYMENT'></td></tr>";
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