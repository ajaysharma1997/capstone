<div class="row" >
    <div class="col-md-12">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">VENDOR</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">HOME</a></li>
      <li><a href="appointment.php">SIGN UP</a></li>
      <li><a href="feedback1.php">FEEDBACK</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SHOW RECORDS<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="showappointment.php">Show Users</a></li>
          <li><a href="showquery.php">Show Queries</a></li>
        </ul>
      </li>
      
       <?php
      if(isset($_SESSION['uid']))
      {
        echo " <li><a href='logout.php'>LOGOUT</a></li>";
      }
      else{
        echo " <li><a href='login.php'>LOGIN</a></li>";
      }
      ?>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">STORES<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="plumber.php">SENETARY & TILES</a></li>
          <li><a href="electric.php">ELECTRIC & ELECTRONICS</a></li>
          <li><a href="mason1.php">CEMENT & REINFORCEMENT</a></li>
          <li><a href="blood.php">BLOOD BANK</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICES<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="private.php">PRIVATE</a></li>
          <li><a href="govt.php">GOVERNMENT</a></li>
        </ul>
      </li>
      <li><a href="help.php">HELP</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
    </ul>
  </div>
</nav>
</div>
</div>