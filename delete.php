<?php
    $h=@mysql_connect("localhost","root"."");
    @mysql_select_db("cms");
    mysql_query("delete from appointment where app_token=$_REQUEST[id]");
    header("location:showappointment.php");
?>