<?php
$msg="";
if(isset($_REQUEST['Submit']))
{
    include 'blogic.php';
    
    $qry="insert into query values('$_REQUEST[txt_name]','$_REQUEST[txt_email]','$_REQUEST[txt_mobile]','$_REQUEST[txt_country]','$_REQUEST[txt_message]')";
    ExecuteNonQuery($qry);
    if(mysql_affected_rows()>0)
    {
        $msg="<font color='green'><h4>Query Submited!!!</h4></font>";
    }
    else
    {
        $msg="<font color='red'><h4>Error in Submiting Query!!!</h4></font>".mysql_error();
    }
    mysql_close($h);
}
?>
<h3>For Queries</h3>
<form action="/action_page.php">
    <div class="form-group">
      <label for="name">Full Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Full Name" name="txt_name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="txt_email">
    </div>
    <div class="form-group">
      <label for="mob">Mobile:</label>
      <input type="text" class="form-control" id="mob" placeholder="Mobile" name="txt_mobile">
    </div>
    <div class="form-group">
        <label for="msg">Message:</label><br />
        <textarea class="form-control input-lg" name="txt_message" placeholder="Message"></textarea><br /><br />
    </div>
    
    <?php
echo $msg;
?>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
